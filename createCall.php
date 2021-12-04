<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


    global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
           $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



    if(isset($_POST['search']))
    {
        $r_code=$_POST['typeahead'];


        $query = "SELECT retailer.*, distributor.*, fa.* FROM retailer join distributor ON retailer.d_code = distributor.d_code
                                  join fa ON retailer.f_code = fa.f_code WHERE retailer.r_code = '$r_code' ";
        $result = mysqli_query($conn, $query);



        $sql = "SELECT * FROM `retailer` r,`distributor` d,`fa` f WHERE r.`r_code`='$r_code' AND r.`d_code`=d.`d_code` AND r.`f_code`=f.`f_code`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)) {

                $r_code= $row['r_code'];
                $r_group= $row['r_group'];

                $r_territory= $row['r_territory'];
                $r_region= $row['r_region'];

                $r_name= $row['r_name'];
                $r_bazar= $row['r_bazar'];

                $r_proprietor= $row['r_proprietor'];
                $r_cell= $row['r_cell'];

                $d_name= $row['d_name'];
                $d_cell= $row['d_cell'];

                $f_name= $row['f_name'];
                $f_cell= $row['f_cell'];

            }
        }
    }

    if(isset($_POST["submit"])){

        $r_code = $_REQUEST['r_code'];
        $date = $_REQUEST['date'];
        $status = $_REQUEST['status'];
        $remarks = $_REQUEST['remarks'];
        $submitted_by = $_SESSION["Name"];

        $save = "INSERT INTO call_info (retailer_code, date, status, remarks, submitted_by) VALUES ('$r_code', '$date','$status','$remarks', '$submitted_by')";
        $result = $conn->query($save);

        if ($result) {
            setMessage('Call Record Successfully Added!', 'success');
        }
        else{
            setMessage('Adding Failed!', 'danger');
        }

        $retailer=$r_code;



        $sql22 = "SELECT * FROM `retailer` r,`distributor` d,`fa` f WHERE r.`r_code`='$r_code' AND r.`d_code`=d.`d_code` AND r.`f_code`=f.`f_code`";
        $result = mysqli_query($conn, $sql22);

        if (mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)) {

                $r_code= $row['r_code'];
                $r_group= $row['r_group'];

                $r_territory= $row['r_territory'];
                $r_region= $row['r_region'];

                $r_name= $row['r_name'];
                $r_bazar= $row['r_bazar'];

                $r_proprietor= $row['r_proprietor'];
                $r_cell= $row['r_cell'];

                $d_name= $row['d_name'];
                $d_cell= $row['d_cell'];

                $f_name= $row['f_name'];
                $f_cell= $row['f_cell'];

            }
        }



    }


    ?>



    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/insert.css">

        <script src="https://kit.fontawesome.com/57ae8ebfe0.js" crossorigin="anonymous"></script>
        <script src="js\typeahead.min.js"></script>
        <script>

            $(document).ready(function () {
                $('input.typeahead').typeahead({
                    name: 'typeahead',
                    remote: 'search.php?key=%QUERY',
                    limit: 18
                });
            });
        </script>

    </head>
    <body>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Call</li>
    </ol>
    <div class="container-fluid">
        <div class="table-responsive-sm">
            <form id="retailer_code" method="POST">

                <div class="row">
                    <div class="column left">
                        <div class="card">

                            <fieldset>
                                <legend>Retailer Information</legend>
                                <table class="table table-sm table-striped table-bordered">
                                    <tbody style="text-align: left">
                                    <tr>
                                        <td>Retailer Code:</td>
                                        <td><strong><?php echo $r_code; ?> </strong></td>
                                        <td>Group:</td>
                                        <td><strong><?php echo $r_group; ?> </strong></td>
                                    </tr>

                                    <tr>
                                        <td>Territory:</td>
                                        <td><strong><?php echo $r_territory; ?> </strong></td>
                                        <td>Region:</td>
                                        <td><strong><?php echo $r_region; ?> </strong></td>
                                    </tr>


                                    <tr>
                                        <td>Retailer Name:</td>
                                        <td><strong><?php echo $r_name; ?> </strong></td>
                                        <td>Retailer Bazar:</td>
                                        <td><strong><?php echo $r_bazar; ?> </strong></td>
                                    </tr>


                                    <tr>
                                        <td>Proprietor Name:</td>
                                        <td><strong><?php echo $r_proprietor; ?> </strong></td>
                                        <td>Retailer Cell:</td>
                                        <td><strong>
                                                <?php echo "<a href='tel:+880.$r_cell'>$r_cell</a>"; ?>
                                            </strong></td>

                                    </tr>

                                    <tr>
                                        <td>Distributor Name:</td>
                                        <td><strong><?php echo $d_name; ?> </strong></td>
                                        <td>Distributor Cell:</td>
                                        <td><strong>
                                                <?php echo "<a href='tel:+880.$d_cell'>$d_cell</a>"; ?>
                                            </strong></td>

                                    </tr>


                                    <tr>
                                        <td>FA Name:</td>
                                        <td><strong><?php echo $f_name; ?> </strong></td>
                                        <td>FA Cell:</td>
                                        <td><strong>
                                                <?php echo "<a href='tel:+880.$f_cell'>$f_cell</a>"; ?>
                                            </strong></td>

                                    </tr>

                                    </tbody>

                                </table>

                            </fieldset>

                        </div>
                    </div>

                    <div class="column right">
                        <div class="card">

                            <fieldset>

                                <legend>Input Call Data</legend>
                                <table class="table table-sm table-borderless">
                                    <form id="search_data" method="POST">
                                        <tbody style="text-align: left">
                                        <tr>
                                            <td>Retailer Code:</td>
                                            <td><input type="text" class=" typeahead tt-query" autocomplete="off"
                                                       spellcheck="false" name="typeahead" value="<?php echo $r_code; ?>"
                                                       required></td>
                                            <td>
                                                <input type="submit" name="search" class="btn btn-primary btn-sm"
                                                       value="Search">
                                            </td>
                                        </tr>

                                        </tbody>
                                    </form>

                                    <form id="add_data" method="POST">
                                        <tbody style="text-align: left">
                                        <tr>
                                            <td>
                                                <input class="form-control" type="hidden" name="r_code"
                                                       value="<?php echo $r_code; ?>" required></td>
                                        </tr>

                                        <tr>
                                            <td>Call Date</td>
                                            <td><input class="form-control form-control-sm" type="Date" name="date" required></td>
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <select name="status" class="form-control" required>
                                                    <?php
                                                    $fStatus = array("Answered", "Declined", "Not Answered", "Wrong Number", "Unreachable");
                                                    foreach ($fStatus as $status) {
                                                        ?>
                                                        <option><?= $status ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Remarks</td>
                                            <td>
                                                <input type="text" name="remarks" class="form-control" required>
                                            </td
                                        </tr>

                                        <tr>
                                            <td colspan="3" style="text-align: center;">
                                                <input class="btn btn-success btn-sm btn-block" type="submit" name="submit"
                                                       value="Submit">
                                            </td>
                                        </tr>

                                        </tbody>
                                </table>
                            </fieldset>
            </form>

        </div>
    </div>
    </div>

    <br>

    <div class="row">
        <div class="down">
            <div class="card">
                <fieldset>
                    <legend>Call Data</legend>
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                        <th>Date</th>
                        <th>Retailer Code</th>
                        <th>Retailer Name</th>
                        <th>Retailer Cell</th>
                        <th>Retailer Group</th>
                        <th>Call Status</th>
                        <th>Remarks</th>
                        </thead>
                        <?php
                        $sql = "SELECT retailer.*, call_info.* FROM retailer INNER JOIN call_info ON retailer.r_code = call_info.retailer_code WHERE call_info.retailer_code = '$r_code'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?= $row["date"] ?></td>
                                <td><?= $row["r_code"] ?></td>
                                <td><?= $row["r_name"] ?></td>
                                <td><?= '0'.$row["r_cell"] ?></td>
                                <td><?= $row["r_group"] ?></td>
                                <td><?= $row["status"] ?></td>
                                <td><?= $row["remarks"] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                </fieldset>
            </div>
        </div>
    </div>


    </body>
    </html>



    <?php
} else {
    header('Location: disconnect.php');

}

?>