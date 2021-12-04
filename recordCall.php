<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


    global $start, $end, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
           $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;


    if(isset($_POST['search'])){
        $start=$_POST['start'];
        $end=$_POST['end'];
        $query = "SELECT retailer.*, call_info.* FROM retailer INNER JOIN call_info ON retailer.r_code = call_info.retailer_code WHERE call_info.date BETWEEN '" . $start . "' AND '".$end."'";
        $result = mysqli_query($conn, $query);
    }
    else{
        $query = "SELECT retailer.*, call_info.* FROM retailer INNER JOIN call_info ON retailer.r_code = call_info.retailer_code";
        $result = mysqli_query($conn, $query);
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

            $(document).ready(function(){
                $('input.typeahead').typeahead({
                    name: 'typeahead',
                    remote:'search.php?key=%QUERY',
                    limit : 18
                });
            });
        </script>

    </head>
    <body>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Call Record</li>
    </ol>

    <form method="POST">
        <table class="table table-responsive">
            <tr>

                <td><strong>Start Date</strong>
                    <input type="date" name="start" placeholder="Start Date" value=<?php echo $start;?>>
                </td>

                <td><strong>Start Date</strong>
                    <input type="date" name="end" placeholder="End Date" value=<?php echo $end;?>>
                </td>

                <td><input type="submit" name="search" class="btn btn-success" value="Search"></td>
            </tr>

            </div>

        </table>
    </form>

    <div class="table-responsive">

        <table id="fa_data" class="table table-striped table-bordered">
            <thead style="color: black">
            <tr>
                <th>Call Date</th>
                <th>Retailer Code</th>
                <th>Retailer Name</th>
                <th>Retailer Cell</th>
                <th>Retailer Group</th>
                <th>Response Status</th>
                <th>Remarks</th>
                <th>Submitted By</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
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
                    <td><?= $row["submitted_by"] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    </body>
    </html>


    <?php
} else {
    header('Location: index.php');

}

?>

<script>
    $(document).ready(function () {
        var Table = $('#fa_data').DataTable({
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