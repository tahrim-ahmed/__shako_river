<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


    global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
           $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



    $sql = "SELECT * FROM retailer WHERE r_code = '" . $_GET["ID"] . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $retailer = mysqli_fetch_array($result);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $rCell = $_REQUEST['rCell'];
        $updated = 'Updated';

        $sql2 = "UPDATE `retailer` SET `r_cell` = '$rCell' WHERE r_code = '" . $_GET["ID"] . "'";
        if ($conn->query($sql2)) {
            $sql = "UPDATE missing SET updated='{$updated}' WHERE r_code = '" . $_GET["ID"] . "'";
    if ($result = mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
			window.location = 'missing.php';
		</script>";

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

            $(document).ready(function(){
                $('input.typeahead').typeahead({
                    name: 'dCode',
                    remote:'selectDistributor.php?key=%QUERY',
                    limit : 18
                });
            });
            $(document).ready(function(){
                $('input.typeahead2').typeahead({
                    name: 'fCode',
                    remote:'selectFa.php?key=%QUERY',
                    limit : 18
                });
            });
        </script>

    </head>
    <body>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Number</li>
    </ol>

    <div class="row">
        <div class="col"></div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center text-lg text-white" style="background: #6c757d; color: black">
                    <div class="card-title">Edit Retailer Number</div>
                </div>
                <div class="card-body text-left">
                    <form style="width: 500px; margin: auto" method="post" action="">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="rCode">Retailer Code</label>
                                <input type="text" name="rCode" class="form-control" value="<?= $retailer['r_code'] ?>" required disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="rName">Retailer Name</label>
                                <input type="text" name="rName" class="form-control" value="<?= $retailer['r_name'] ?>" required disabled>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="rCell">Retailer Cell</label>
                                <input type="text" name="rCell" class="form-control" value="<?= $retailer['r_cell'] ?>" required>
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary" style="width: 200px">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    </body>
    </html>


    <?php
} else {
    header('Location: index.php');

}

?>
