<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


	global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
		   $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



    $query = "SELECT * FROM missing WHERE updated != 'Updated'";
    $result = mysqli_query($conn, $query);


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
		<li class="breadcrumb-item active" aria-current="page">Missing</li>
	</ol>

    <div class="table-responsive">

        <table id="fa_data" class="table table-striped table-bordered">
            <thead style="color: black">
            <tr>
                <th>Retailer Code</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?=$row["r_code"]?></td>
                    <td><?=$row["updated"]?></td>
                    <td>
                        <?php
                        if($row["updated"] == 'Not Updated'){
                            ?>
                            <a href="update_number.php?ID=<?= $row["r_code"]?>" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-check"></i>
                        </a></td>
                            <?php
                        }
                        else{
                            ?>
                            <i class="fas fa-check-circle"></i>
                            <?php
                        }
                        ?>
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
            dom: '<"row"<"col"><"col-auto"f>>rt<"row"<"col"i><"col-auto"l>>p',
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