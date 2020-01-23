<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quiz';
$db_user = 'root';
$db_pass = '';

//Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error Handler
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }
?>

<?php
//Create connection credentials
$db_name2 = 'registration';

//Create mysqli object
$mysqli2 = new mysqli($db_host, $db_user, $db_pass, $db_name2);

//Error Handler
if($mysqli2->connect_error){
    printf("Connect failed: %s\n", $mysqli2->connect_error);
    exit();
    }
?>
