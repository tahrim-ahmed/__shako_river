<?php

include_once("dbconfig.php");

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
                $prevQuery = "SELECT f_code FROM fa2 WHERE f_code = '".$line[0]."' AND f_name = '".$line[1]."'";
                $query = "SELECT f_code FROM fa2 WHERE f_code = '".$line[0]."' AND f_name != '".$line[1]."'";
                $prevResult = $conn->query($prevQuery);
                $result = $conn->query($query);

                if($prevResult->num_rows > 0){
                    // Skip data in the database
                    ccontinue;
                }elseif ($result->num_rows > 0){
                    // Insert member data in the database
                    $conn->query("INSERT INTO duplicate_fa (f_code, f_name, f_cell, f_status) VALUES ('".$f_code."', '".$f_name."', '".$f_cell."', '".$f_status."')");
                }
                else{
                    // Insert member data in the database
                    $conn->query("INSERT INTO fa2 (f_code, f_name, f_cell, f_status) VALUES ('".$f_code."', '".$f_name."', '".$f_cell."', '".$f_status."')");
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