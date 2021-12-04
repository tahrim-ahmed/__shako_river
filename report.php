<?php
include 'dbconfig.php';
include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin")

{



    global $start, $end, $object, $count, $sum;

    if(isset($_POST['search']))
    {
        $start=$_POST['start'];
        $end=$_POST['end'];

        //$sql30 = "SELECT SUM(i_amount) as sum, COUNT(r_code) as count FROM invoice WHERE date BETWEEN '$start' AND '$end'";
        $sql30 = "SELECT SUM(i_amount) as sum, COUNT(r_code) as count FROM invoice2 WHERE date BETWEEN '" . $start . "' AND '".$end."'";

        $res = mysqli_query($conn, $sql30);

        if (mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)) {
                $sum=$row['sum'];
                $count=$row['count'];

            }
        }


    }

    if(isset($_POST["export"])){

        $start=$_POST['start'];
        $end=$_POST['end'];


        //$sql21 = "SELECT r_code, d_check, date, memo_no, i_amount, p_amount, entry, remarks, error, status FROM invoice WHERE date BETWEEN '$start' AND '$end'";

        $sql21 = "SELECT r_code, d_check, date, memo_no, i_amount, p_amount, entry, remarks, error, status FROM invoice2 WHERE date BETWEEN '$start' AND '$end'";
        $result6 = mysqli_query($conn, $sql21);
        ob_end_clean();

        if ($result6) {

            while ($row = mysqli_fetch_assoc($result6)) {
                $object .= $row["r_code"] . ",". $row["d_check"].",". $row["date"].",". $row["memo_no"].",". $row["i_amount"].",". $row["p_amount"].",". $row["entry"].",". $row["remarks"].",". $row["error"].",". $row["status"]. "\r\n";
            }
        }
        $filename = "Report" . date("Y-m-d_H-i");
        header("Content-type: application/xlsx");
        header("Content-disposition: csv" . date("Y-m-d") . ".csv");
        header("Content-disposition: filename=" . "invoice" . ".csv");

        print "Retailer Code, Distributor Check, Date, Memo No, Invoice Amount, Paid Amount, Code Found, Remarks, Error, Status\r\n";
        print $object;
        exit();
    }

    ?>




    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Report</li>
    </ol>

    <div class="container-fluid">
        <div class="table-responsive-sm">
            <form id="report" method="POST">
                <table class="table table-responsive">
                    <tr>

                        <td><strong>Start Date</strong>
                            <input type="date" name="start" placeholder="Start Date" value=<?php echo $start;?>>
                        </td>

                        <td><strong>End Date</strong>
                            <input type="date" name="end" placeholder="End Date" value=<?php echo $end;?>>
                        </td>

                        <td><input type="submit" name="search" class="btn btn-success" value="Search"></td>
                    </tr>

        </div>

        </table>
        </form>


        <fieldset>
            <H3>Report <?php if($start && $end){ echo ": From: ". $start. " To: " .$end. " |  Invoice: ". $count." |  Total: ".$sum; }?></h3>
            <table id="invoice" class="table table-sm table-hover table-bordered" >
                <thead class="thead-light">
                <th>Retailer Code</th>
                <th>D Check</th>
                <th>Date</th>
                <th>Memo No.</th>
                <th>Invoice Amount</th>
                <th>Paid Amount</th>
                <th>Code Found</th>
                <th>Remarks</th>
                <th>Errors</th>
                <th>Status</th>

                </thead>



                <?php

                if(isset($_POST['search']))
                {
                    $start=$_POST['start'];
                    $end=$_POST['end'];

                    //$distributor_check= $row['distributor_check'];

                    //$sql20 = "SELECT r_code, d_check, date, memo_no, i_amount, p_amount, entry, remarks, error, status FROM invoice WHERE date BETWEEN '$start' AND '$end'";

                    $sql20 = "SELECT r_code, d_check, date, memo_no, i_amount, p_amount, entry, remarks, error, status FROM invoice2 WHERE date BETWEEN '" . $start . "' AND '".$end."'";

                    $result3 = mysqli_query($conn, $sql20);

                    if (mysqli_num_rows($result3)>0){

                        while($row = mysqli_fetch_assoc($result3)) {

                            echo "<tr>";
                            echo "<td>{$row['r_code']}</td>
			<td>{$row['d_check']}</td>
			<td>{$row['date']}</td>
			<td>{$row['memo_no']}</td>
			<td>{$row['i_amount']}</td>
			<td>{$row['p_amount']}</td>
			<td>{$row['entry']}</td>
			<td>{$row['remarks']}</td>
			<td>{$row['error']}</td>
			<td>{$row['status']}</td>";
                            echo "</tr>";
                        }
                    }


                }

                ?>

            </table>
        </fieldset>
    </div>
    </div>

    </body>
    </html>

    <?php
}
else
    echo "Access Denied";

?>

<script>
    $(document).ready(function () {
        var Table = $('#invoice').DataTable({
            'bServerSide': false,
            'ordering' : false,
            dom: '<"row"<"col"B><"col-auto"f>>rt<"row"<"col"i><"col-auto"l>>p',
            buttons: ['colvis',
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        {
                            extend: 'csv',
                            text: 'Export as Csv',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excel',
                            text: 'Export as Excel',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            exportOptions: {
                                columns: ':visible'
                            }
                        }
                    ]
                },
            ],
        });
    });
</script>
