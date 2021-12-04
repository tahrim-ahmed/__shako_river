<?php

$servername = "localhost";
$db_username = "rivewvux_shako";
$db_password = "Ashikchin2";
$db_name = "rivewvux_shako";

$errors   = array(); 

try {
    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function setMessage($message, $type = 'info')
{
    $_SESSION['message'] = (object)['text' => $message, 'type' => $type];
}
?>
