<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


    global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,

//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
           $c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



    if(isset($_POST['save'])){

        $f_code = $_REQUEST['fCode'];
        $f_name = $_REQUEST['fName'];
        $f_cell = $_REQUEST['fCell'];
        $f_status = $_REQUEST['fStatus'];

        $find = "SELECT f_code FROM new_fa WHERE f_code = '".$f_code."'";
        $result = $conn->query($find);

        if ($result->num_rows > 0) {
            setMessage('FA Code Already Exists!', 'danger');
        }
        else{
            $sql2 = "INSERT INTO new_fa (f_code, f_name, f_cell, f_status) VALUES ('".$f_code."', '".$f_name."', '".$f_cell."', '".$f_status."')";
            if ($conn->query($sql2)) {
                setMessage('FA Successfully Added!', 'success');
            }
        }
    }

    if(isset($_POST['importSubmit'])){

        // Allowed mime types
        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

        // Validate whether selected file is a CSV file
        if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){

            // If the file is uploaded
            if(is_uploaded_file($_FILES['file']['tmp_name'])){

                // Open uploaded CSV file with read-only mode
                $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

                // Skip the first line
                fgetcsv($csvFile);

                // Parse data from CSV file line by line
                while(($line = fgetcsv($csvFile)) !== FALSE){
                    // Get row data
                    $f_code   = $line[0];
                    $f_name  = $line[1];
                    $f_cell  = $line[2];
                    $f_status = $line[3];

                    // Check whether member already exists in the database with the same email
                    $prevQuery = "SELECT f_code FROM new_fa WHERE f_code = '".$line[0]."' AND f_name = '".$line[1]."'";
                    $query = "SELECT f_code FROM new_fa WHERE f_code = '".$line[0]."' AND f_name != '".$line[1]."'";
                    $prevResult = $conn->query($prevQuery);
                    $result = $conn->query($query);

                    if($prevResult->num_rows > 0){
                        // Skip data in the database
                        ccontinue;
                    }elseif ($result->num_rows > 0){
                        // Insert member data in the database
                        $conn->query("INSERT INTO duplicate_fa (fa_code, fa_name, fa_cell, fa_status) VALUES ('".$f_code."', '".$f_name."', '".$f_cell."', '".$f_status."')");
                    }
                    else{
                        // Insert member data in the database
                        $conn->query("INSERT INTO new_fa (f_code, f_name, f_cell, f_status) VALUES ('".$f_code."', '".$f_name."', '".$f_cell."', '".$f_status."')");
                        setMessage('FA Successfully Uploaded!', 'success');
                    }
                }

                // Close opened CSV file
                fclose($csvFile);

                $qstring = '?status=succ';
            }else{
                $qstring = '?status=err';
            }
        }else{
            $qstring = '?status=invalid_file';
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
        <li class="breadcrumb-item active" aria-current="page">Add FA</li>
    </ol>

    <div class="row">
        <div class="col"></div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center text-lg text-white" style="background: #6c757d; color: black">
                    <div class="card-title">Add New FA</div>
                </div>
                <div class="card-body text-left">
                    <form style="width: 500px; margin: auto" method="post" action="">
                        <?php
                        if (isset($_SESSION['message'])) {
                            $error = $_SESSION['message'];
                            ?>
                            <div id="alertBox" class="alert alert-<?= $error->type ?> text-center"
                                 style="margin: 10px;"><?= $error->text ?></div>
                            <?php
                            unset($_SESSION['message']);
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fCode">FA Code</label>
                                <input type="text" name="fCode" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fName">FA Name</label>
                                <input type="text" name="fName" class="form-control" required>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="fCell">FA Cell</label>
                                <input type="text" name="fCell" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fStatus">Status</label>
                                <select name="fStatus" class="form-control" required>
                                    <?php
                                    $fStatus = array("Active", "In-Active");
                                    foreach ($fStatus as $status) {
                                        ?>
                                        <option><?= $status ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary" name="save" style="width: 200px">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-header text-center text-lg text-white" style="background: #6c757d; color: black">
                    <div class="card-title">Upload CSV File</div>
                </div>
                <div class="col-md-12 card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" />
                        <input type="submit" class="btn btn-primary" name="importSubmit" value="Upload" style="margin-top: 20px">
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

<script>
    function formToggle(ID){
        var element = document.getElementById(ID);
        if(element.style.display === "none"){
            element.style.display = "block";
        }else{
            element.style.display = "none";
        }
    }
</script>
