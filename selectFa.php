<?php

$key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","rivewvux_shako","Ashikchin2","rivewvux_shako");
    $query=mysqli_query($con, "select * from new_fa where f_code LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['f_code'];
    }
    echo json_encode($array);
    mysqli_close($con);

?>