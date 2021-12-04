<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


	global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
		   $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



    $sql = "SELECT * FROM distributor WHERE d_code = '" . $_GET["ID"] . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $fa = mysqli_fetch_array($result);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dCell = $_REQUEST['dCell'];
    $dStatus = $_REQUEST['dStatus'];

    $sql2 = "UPDATE `distributor` SET `d_cell` = '$dCell', `d_status` = '$dStatus' WHERE d_code = '" . $_GET["ID"] . "'";
    if ($conn->query($sql2)) {

        echo "<script type='text/javascript'>
			window.location = 'distributor.php';
		</script>";
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
		<li class="breadcrumb-item active" aria-current="page">Edit Distributor</li>
	</ol>

<div class="row">
    <div class="col"></div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-center text-lg text-white" style="background: #6c757d; color: black">
                <div class="card-title">Edit Distributor Information</div>
            </div>
            <div class="card-body text-left">
                <form style="width: 500px; margin: auto" method="post" action="">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="dCode">Distributor Code</label>
                            <input type="text" name="dCode" class="form-control" value="<?= $fa['d_code'] ?>" required disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="dName">Distributor Name</label>
                            <input type="text" name="dName" class="form-control" value="<?= $fa['d_name'] ?>" required disabled>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="dCell">Distributor Cell</label>
                            <input type="text" name="dCell" class="form-control" value="<?= $fa['d_cell'] ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dStatus">Status</label>
                            <select name="dStatus" class="form-control" required>
                                <?php
                $fStatus = array("Active", "In-Active");
                foreach ($fStatus as $status) {
                    ?>
                                    <option <?= $status === $fa['d_status'] ? 'selected' : '' ?>><?= $status ?></option>
                                    <?php
                }
                ?>
                            </select>
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
