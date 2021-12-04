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
                $d_code   = $line[0];
                $d_name  = $line[1];
                $d_cell  = $line[2];
                $d_status = $line[3];

                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT d_code FROM distributor2 WHERE d_code = '".$line[0]."' AND d_name = '".$line[1]."'";
                $query = "SELECT d_code FROM distributor2 WHERE d_code = '".$line[0]."' AND d_name != '".$line[1]."'";
                $prevResult = $conn->query($prevQuery);
                $result = $conn->query($query);

                if($prevResult->num_rows > 0){
                    // Skip data in the database
                    ccontinue;
                }elseif ($result->num_rows > 0){
                    // Insert member data in the database
                    $conn->query("INSERT INTO duplicate_distributor (d_code, d_name, d_cell, d_status) VALUES ('".$d_code."', '".$d_name."', '".$d_cell."', '".$d_status."')");
                }
                else{
                    // Insert member data in the database
                    $conn->query("INSERT INTO distributor2 (d_code, d_name, d_cell, d_status) VALUES ('".$d_code."', '".$d_name."', '".$d_cell."', '".$d_status."')");
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