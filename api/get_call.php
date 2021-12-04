<?php

include_once("../dbconfig.php");

if (isset($_POST['group']) || isset($_POST['dateRange']) || isset($_POST['r_code'])) {
    $group = null;
    $dateRange = null;
    $code = null;
    if (isset($_POST['dateRange'])) {
        $dateRange = $_POST['dateRange'];
    }
    if (isset($_POST['group'])) {
        $group = $_POST['group'];
    }
    if (isset($_POST['r_code'])) {
        $code = $_POST['r_code'];
    }
    $table = 'call_info';
    $primaryKey = 'call_id';
    $columns = array(
        array('db' => 'retailer_group', 'dt' => 'retailer_group'),
        array('db' => 'retailer_code', 'dt' => 'retailer_code'),
        array('db' => 'date', 'dt' => 'date'),
        array('db' => 'call_no', 'dt' => 'call_no'),
        array('db' => 'status', 'dt' => 'status'),
        array('db' => 'remarks', 'dt' => 'remarks'),
    );
    $sql_details = array(
        'user' => 'rivewvux_shako',
        'pass' => 'Ashikchin2',
        'db' => 'rivewvux_shako',
        'host' => 'localhost'
    );
    $where = null;
    if ($group) {
        if ($dateRange)
            $where = "retailer_group = '" . $group . "' AND (date BETWEEN '" . $dateRange['start'] . "' AND '" . $dateRange['end'] . "')";
        else
            $where = "retailer_group = '" . $group . "'";
    }
    if ($code) {
        if ($dateRange)
            $where = "retailer_code = '" . $code . "' AND (date BETWEEN '" . $dateRange['start'] . "' AND '" . $dateRange['end'] . "')";
        else
            $where = "retailer_code = '" . $code . "'";
    }
    include_once('server_side_load.php');
    echo json_encode(
        SSP::complex($_POST, $sql_details, $table, $primaryKey, $columns, $where)
    );
}
?>