<?php
ini_set('display_errors', '0');
error_reporting(E_ALL^E_NOTICE);

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);


?>

<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>View Products</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</head>
		<body>


		<?php 
		include_once "header_admin.php";
		echo $_SESSION['m'];
		 $_SESSION['m']="";
		
	if($_SESSION['user_type']=='superadmin'){
	$sql = mysql_query("select * from user where id != 9");
}


if($_GET['did']){
	mysql_query("delete from user where id='{$_GET['did']}'");
	header("Location: view_user.php");
}

?>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
         <th>SL no</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Delete User</th>
               
            </tr>
        </thead>

	<?php
	$i=1;
	while ($u = mysql_fetch_array($sql)) {
		?>
		<tbody>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $u['name'];?></td>
				<td><?php echo $u['gender'];?></td>
				<td><?php echo $u['address'];?></td>
				<td><?php echo "<a href=\"javascript:deluser(id=$u[id])\">Delete</a>";?></td>
			</tr>
		</tbody>
		
		<?php
	$i++;
	}
	?>
</table>


<?php include_once "footer.php"; ?>
	<script>
	function deluser(id){
		var msg = confirm("Are you sure you want to delete this user?");

	if (msg) {
		window.location = "view_user.php?did="+id;
	}
	}
	</script>



</body>
</html>