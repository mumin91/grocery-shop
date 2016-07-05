<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);

error_reporting(E_ALL^E_NOTICE);
session_start();

if($_SESSION['user_id']!="" and $_SESSION['password']!=""){
	
	if($_SESSION['user_type']=='superadmin' or 'admin'){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php include_once "header_admin.php"; ?>
  
<div class="container">
 
	
	<h1><?php echo "Welcome ".$_SESSION['name']; ?></h1>
	
</div>

<?php 
}

}

else{
header("Location: message.php");

	}

	
 ?>


</body>
</html>
