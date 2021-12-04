<?php
include_once("../dbconfig.php");

if (isset($_POST['date'])) {
    $saveSQL = "INSERT INTO `call_info` (retailer_group, retailer_code, date,call_no, status, remarks)
    VALUES ('" . $_POST['retailer_group'] . "', '" . $_POST['retailer_code'] . "', '" . $_POST['date'] . "','" . $_POST['call_no'] . "', '" . $_POST['status'] . "', '" . $_POST['remarks'] . "')";

    echo json_encode(['status' => mysqli_query($conn, $saveSQL)]);
} else if (isset($_GET['searchTerm'])) {
    $search = $_GET['searchTerm'];
    $searchSQL = "SELECT DISTINCT r_group FROM `retailer` WHERE r_group LIKE '%" . $search . "%'";
    $result = $conn->query($searchSQL);
    $json = [];
    while ($row = $result->fetch_assoc()) {

        $json[] = ['id' => $row['r_group'], 'text' => $row['r_group']];
    }
    echo json_encode($json);
} else if (isset($_POST['selectedGroup'])) {
    $g = $_POST['selectedGroup'];
    $out = "";
    $returnSQL = "SELECT r_code, r_group FROM retailer where r_group= '" . mysqli_escape_string($conn, $g) . "';";
    $retailer = $conn->query($returnSQL);
    if (mysqli_num_rows($retailer) > 0) {
        while ($row = mysqli_fetch_assoc($retailer)) {
            $out .= "<tr>";
            $out .= "<td><b class='text-info' style='cursor: pointer' onclick='selectCode(`" . $row['r_code'] . "`)'>" . $row['r_code'] . "</a></b></td></b></td>";
            for ($x = 1; $x <= 6; $x++) {
                $out .= "<td><button type='button' id=C" . $x . "__" . $row['r_code'] . " class='btn btn-sm btn-primary'data-target='#myModal' onclick='set_call_status(`C" . $x . "`,`" . $row['r_group'] . "`,`" . $row['r_code'] . "`)'> C" . $x . "</button></td>";
            }
            $out .= "</tr>";
        }
    }
    echo json_encode(['div' => $out]);
} else if (isset($_POST['leftDeatils'])) {
    $newCode = $_POST['leftDeatils'];
    $detailsSQL = "SELECT * FROM `retailer` r,`distributor` d,`fa` f WHERE r.`r_code`='$newCode' AND r.`d_code`=d.`d_code` AND r.`f_code`=f.`f_code`";
    $result = mysqli_query($conn, $detailsSQL);
    $output = '';
    $details = null;
    if (mysqli_num_rows($result) > 0) {
        $details = mysqli_fetch_assoc($result);
        $output .= '<tbody style="text-align: left">
                    <tr>
                        <td>Retailer Code:</td>
                        <td>
                            <strong>
                                ' . $details['r_code'] . '
                            </strong>
                        </td>
                        <td>Group:</td>
                        <td>
                            <strong>
                                ' . $details['r_group'] . '
                            </strong>
                        </td>
                    </tr>

                    <tr>
                        <td>Territory:</td>
                        <td>
                            <strong>
                            ' . $details['r_territory'] . '
                            </strong>
                        </td>
                        <td>Region:</td>
                        <td>
                            <strong>
                            ' . $details['r_region'] . '
                            </strong>
                        </td>
                    </tr>


                    <tr>
                        <td>Retailer Name:</td>
                         <td>
                            <strong>
                            ' . $details['r_name'] . '
                            </strong>
                        </td>
                        <td>Retailer Bazar:</td>
                        <td>
                            <strong>
                            ' . $details['r_bazar'] . '
                            </strong>
                        </td>
                    </tr>


                    <tr>
                        <td>Proprietor Name:</td>
                         <td>
                            <strong>
                            ' . $details['r_proprietor'] . '
                            </strong>
                        </td>
                        <td>Retailer Cell:</td>
                        <td>
                            <strong>
                            <a href=tel:+880.' . $details['r_cell'] . '>' . $details['r_cell'] . '</a>
                            </strong>
                        </td>
                    </tr>

                    <tr>
                        <td>Distributor Name:</td>
                        <td>
                            <strong>
                            ' . $details['d_name'] . '
                            </strong>
                        </td>
                        <td>Distributor Cell:</td>
                        <td>
                            <strong>
                             <a href=tel:+880.' . $details['d_cell'] . '>' . $details['d_cell'] . '</a>
                            </strong>
                        </td>
                    </tr>


                    <tr>
                        <td>FA Name:</td>
                        <td>
                            <strong>
                            ' . $details['f_name'] . '
                            </strong>
                        </td>
                        <td>FA Cell:</td>
                        <td>
                            <strong>
                            <a href=tel:+880.' . $details['f_cell'] . '>' . $details['f_cell'] . '</a>
                            </strong>
                        </td>
                    </tr></tbody>';
    }
    echo json_encode(['details' => $output]);
}


?>