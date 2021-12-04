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
                $r_code = $line[0];
                $r_name = $line[1];
                $r_proprietor = $line[2];
                $r_cell = $line[3];
                $r_status = $line[4];
                $r_bazar = $line[5];
                $r_territory = $line[6];
                $r_region = $line[7];
                $r_area = $line[8];
                $r_group = $line[9];
                $d_code = $line[10];
                $f_code = $line[11];

                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT r_code FROM retailer2 WHERE r_code = '".$line[0]."' AND r_name = '".$line[1]."'";
                $query = "SELECT r_code FROM retailer2 WHERE r_code = '".$line[0]."' AND r_name != '".$line[1]."'";
                $prevResult = $conn->query($prevQuery);
                $result = $conn->query($query);

                if($prevResult->num_rows > 0){
                    // Skip data in the database
                    ccontinue;
                }elseif ($result->num_rows > 0){
                    // Insert member data in the database
                    $conn->query("INSERT INTO duplicate_retailer (r_code, r_name, r_proprietor, r_cell, r_status, r_bazar, r_territory, r_region, r_area, r_group, d_code, f_code) VALUES ('".$r_code."', '".$r_name."', '".$r_proprietor."', '".$r_cell."', '".$r_status."', '".$r_bazar."', '".$r_territory."', '".$r_region."', '".$r_area."', '".$r_group."', '".$d_code."', '".$f_code."')");
                }
                else{
                    // Insert member data in the database
                   $result = $conn->query("INSERT INTO retailer2 (r_code, r_name, r_proprietor, r_cell, r_status, r_bazar, r_territory, r_region, r_area, r_group, d_code, f_code) VALUES ('".$r_code."', '".$r_name."', '".$r_proprietor."', '".$r_cell."', '".$r_status."', '".$r_bazar."', '".$r_territory."', '".$r_region."', '".$r_area."', '".$r_group."', '".$d_code."', '".$f_code."')");
                    if($result){
                        setMessage('Retailer Successfully Added!', 'success');
                    }
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