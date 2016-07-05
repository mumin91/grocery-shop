<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
$_SESSION['id']= "";
$_SESSION['user_id']= "";
$_SESSION['name']= "";
$_SESSION['password']= "";


$_SESSION['m']= "You have succesfully logged out";
header("Location: index.php");

?>