<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","rivewvux_shako","Ashikchin2","rivewvux_shako");
    //$query=mysqli_query($con, "select * from invoice3 where r_code LIKE '%{$key}%' AND (date BETWEEN '2021-01-01' AND '2021-06-31')");
    $query=mysqli_query($con, "select * from retailer where r_code LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['r_code'];
    }
    echo json_encode($array);
    mysqli_close($con);
?>