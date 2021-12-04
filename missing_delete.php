<?php

// connect to the database
include_once("dbconfig.php");

// confirm that the 'id' variable has been set
if (isset($_GET['ID'])) {
// get the 'id' variable from the URL
    $id = $_GET['ID'];
    $updated = 'Updated';

    $sql = "UPDATE missing SET updated='{$updated}' WHERE r_code = '$id'";
    if ($result = mysqli_query($conn, $sql)) {
        setMessage('Update Success', 'success');

    }else{
        setMessage('Update Unsuccessful', 'danger');
    }

} else{
    setMessage('Data not found', 'danger');
}
header('Location:' . $_SERVER["HTTP_REFERER"]);
?>