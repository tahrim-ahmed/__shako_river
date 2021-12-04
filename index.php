<?php
global $version;
$version="2.4.5";
session_start();
include("dbconfig.php");
global $errors, $name ;
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")
{
    header("location:add_data4.php");
    
}

 if (isset($_POST['login'])){

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

    while($row = $result->fetch_assoc()) {

      $_SESSION["username"]=$username;
      $_SESSION["Name"]=$row["Name"];

      if ($row["type"]=="admin")
      {
        
        header("location:add_data4.php");
        $_SESSION["type"]="admin";

      }
      elseif ($row["type"]=="user")
      {
        $_SESSION["type"]="user";
        header("location:add_data4.php");

      }
      else {
      header("location:index.php");
    }
  }
  }
  else{
    array_push($errors, "Wrong username or password");}
    }
  }

?>

<!DOCTYPE html>
<html>
    <title>Shako-River</title>
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png"> 
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" href="css/index.css">
</style>
</head>
<body>
    
<!--<video autoplay muted loop id="myVideo">
  <source src="vedios/index.mp4" type="video/mp4">
</video> -->

<div class="container" onclick="onclick">
  <!--<div class="hero-text">
   <h1 style="font-size: 40px">Welcome to Thumb Logistics</h1>
</div>
-->
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <form action="" method="POST">
    
    
    <p style="color: white; text-align: center;"><img src="images/logo.png" alt="Please Sign In "height="70"></p>
    <p style="color: white; text-align: center;">Version:<?php echo $version;?> </p>
    <?// echo "USER" .$_SESSION['user'];?>
    <input type="text" name="username" placeholder="User Name"/>
    <input type="Password" name="password" placeholder="Password"/>
    <h4 style="color: red; text-align: center;"><?php echo display_error(); ?><h4>
    <input type="submit" name="login" value="Login" class="hero-button">
    
  </form>
  </div>
</div>


</body>
</html>