<?php
error_reporting(E_ALL^E_NOTICE);

session_start();

?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Change Password</title>
	<link rel="icon" type="image/jpg" href="images/fav.jpg">
			<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

		</head>
		<?php include_once "header_user.php";
		 ?>





<h3 align="center"><?php
echo $_SESSION['m'];
$_SESSION['m'] ="";
?></h3>


<div class="col-md-6">
<h1>Change Passwrod</h1>

<form action="action.php" method="post" onSubmit ="return validate(this)">
				<div class="form-group ">
					<label>Old Password</label>
					<input type="password" name="old_p" class="form-control" size="50">
				</div>
				<div class="form-group ">
					<label>New Password</label>
					<input type="password" name="new_p" class="form-control" size="50">
				</div>
				<div class="form-group ">
					<label>Confirm Password</label>
					<input type="password" name="confirm_p" class="form-control" size="50">
				</div>

				<div class="form-group">
					<input type="submit" name="action" class="btn btn-primary btn-lg" value="Save Password">
				</div>

</form>
	
</div>


<script>

	function validate(form){
		
		var op= form.old_p.value;
		if(op==""){alert("Please fill in the old password"); return false;}
		
		var np= form.new_p.value;
		if(np==""){alert("Please enter new password"); return false;}
		
		var cp= form.confirm_p.value;
		if(cp==""){alert("Please confirm password"); return false;}				
	}

</script>