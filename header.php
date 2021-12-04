<?php
global $version;
$version = "3.0";
include_once("dbconfig.php");

session_start();

if (isset($_SESSION['Name']) && $_SESSION['Name'] == "Jim" || $_SESSION['Name'] == "Super Admin" || $_SESSION['Name'] == "Miad") {

$sql = "SELECT COUNT(updated) as noOfNotification FROM missing WHERE updated='Not Updated'";
$notiResult = $conn->query($sql);
$row = $notiResult->fetch_object();
$numberOfNotification = $row->noOfNotification;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Shako-River</title>
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/toastr.css"/>
    <link rel="stylesheet" href="assets/css/select2.min.css"/>
    <link rel="stylesheet" href="assets/tables/datatable/datatables.min.css"/>
    <link rel="stylesheet" href="assets/daterangepicker/daterangepicker.css"/>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/tables/datatables.min.js"></script>
    <script src="assets/js/moment-with-locales.min.js"></script>
    <script src="assets/daterangepicker/daterangepicker.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <img style="height: 50px" src="images/logo.png"></img>
            <p style="color: white;">Version: <?php echo $version; ?> </p>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Invoice
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href='add_data4.php'>Jul-Dec 2021</a>
                        <a class="dropdown-item" href='add_data3.php'>Jan-Apr 2021</a>
                        <a class="dropdown-item" href='add_data.php'>Jul-Dec 2020</a>
                        <a class="dropdown-item" href='add_data2.php'>Jan-Jun 2020</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active"><a class="nav-link" href='/ticket/admin'>Ticket</a></li>
            <li class="nav-item active text-primary"></li>
            <li class="nav-item active"><a class="nav-link" href='missing.php'>
                Mising<?php
                if($numberOfNotification!= 0){
                ?>
                <span class="badge badge-danger badge-counter" id="noOfNotification"><?= $numberOfNotification ?></span>
                    <?php
                } 
?>
            </a></li>
            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Add</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href='addDistributor.php'>Distributor</a>
                        <a class="dropdown-item" href='addFa.php'>FA</a>
                        <a class="dropdown-item" href='addRetailer.php'>Retailer</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">View</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href='distributor.php'>Distributor</a>
                        <a class="dropdown-item" href='fa.php'>FA</a>
                        <a class="dropdown-item" href='retailer.php'>Retailer</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Duplicate
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href='distributorDuplicate.php'>Distributor</a>
                        <a class="dropdown-item" href='faDuplicate.php'>FA</a>
                        <a class="dropdown-item" href='retailerDuplicate.php'>Retailer</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Call</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href='createCall.php'>Add Record</a>
                        <a class="dropdown-item" href='recordCall.php'>View Record</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active"><a class="nav-link" href='report.php'>Report</a></li>
            <li class="nav-item active"><a class="nav-link" href='format.php'>Format</a></li>
        </ul>

        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"><?php echo $_SESSION["Name"]; ?></button>
            <div class="dropdown-menu">
                <!--  <a class="dropdown-item" href="#">Link 1</a> -->
                <!--  <a class="dropdown-item" href="#">Link 2</a> -->
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>


<?php
} else if (isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Shako-River</title>
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/toastr.css"/>
    <link rel="stylesheet" href="assets/css/select2.min.css"/>
    <link rel="stylesheet" href="assets/tables/datatable/datatables.min.css"/>
    <link rel="stylesheet" href="assets/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" href="css/header.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/tables/datatables.min.js"></script>
    <script src="assets/js/moment-with-locales.min.js"></script>
    <script src="assets/daterangepicker/daterangepicker.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <img style="height: 50px" src="images/logo.png"></img>
            <p style="color: white;">Version: <?php echo $version; ?> </p>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item active">
            <li class="nav-item active"><a class="nav-link" href='add_data4.php'>New Invoice</a></li>

            <a class="nav-link active" href='add_data3.php'>Pre Invoice</a>
            </li>

            <li class="nav-item active"><a class="nav-link" href='/ticket/admin'>Ticket</a></li>

            <li class="nav-item active"><a class="nav-link" href='call.php'>Call</a></li>
            <li class="nav-item active"><a class="nav-link" href='report.php'>Report</a></li>
            <li class="nav-item active"><a class="nav-link" href='add_data.php'>Invoice</a></li>
            <li class="nav-item active"><a class="nav-link" href='add_data2.php'>Old Invoice</a></li>
        </ul>

        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"><?php echo $_SESSION["Name"]; ?></button>

            <div class="dropdown-menu">
                <!--  <a class="dropdown-item" href="#">Link 1</a> -->
                <!--  <a class="dropdown-item" href="#">Link 2</a> -->
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>
<?php
} else if (isset($_SESSION['type']) && $_SESSION['type'] == "user") { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Shako-River</title>
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/toastr.css"/>
    <link rel="stylesheet" href="assets/css/select2.min.css"/>
    <link rel="stylesheet" href="assets/tables/datatable/datatables.min.css"/>
    <link rel="stylesheet" href="assets/daterangepicker/daterangepicker.css"/>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/tables/datatables.min.js"></script>
    <script src="assets/js/moment-with-locales.min.js"></script>
    <script src="assets/daterangepicker/daterangepicker.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <img style="height: 50px" src="images/logo.png"></img>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href='add_data4.php'>Jul-Dec 2021</a></li>

            <li class="nav-item active"><a class="nav-link" href='add_data3.php'>Jan-Apr 2021</a></li>

            <li class="nav-item active"><a class="nav-link" href='/ticket'>Ticket</a></li>
            <li class="nav-item active"><a class="nav-link" href='createCall.php'>Call</a></li>
            <li class="nav-item active"><a class="nav-link" href='add_data.php'>Jul-Dec 2020</a></li>
            <!--   <li class="nav-item active"><a class="nav-link" href='add_data2.php'>Old Invoice</a></li>  -->
            <!--  <li class="nav-item active"><a class="nav-link"  href='report.php'>Report</a></li> -->
        </ul>

        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"><?php echo $_SESSION["Name"]; ?></button>
            <div class="dropdown-menu">
                <!--  <a class="dropdown-item" href="#">Link 1</a> -->
                <!--  <a class="dropdown-item" href="#">Link 2</a> -->
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>
<?php
} else
    header('Location: index.php');
?>