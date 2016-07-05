<?php
error_reporting(E_ALL^E_NOTICE);

session_start();



if($_SESSION['user_id']!="" and $_SESSION['password']!=""){
	
	if($_SESSION['user_type']=='superadmin'){

		
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Add Admin</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</head>
		<?php include_once "header_admin.php";?>
		<h3 align="center"><?php echo $_SESSION['m'];
		 $_SESSION['m']=""; ?></h3>
		 
		




         
       

		

		<div class="col-md-8">
		<h1>Add Admin</h1><br>
			<form action="action.php" method="post" onSubmit ="return validate(this)">

				<div class="form-group ">
					<label>Admin Name</label>
					<input type="text" name="name" class="form-control" size="60">
				</div>
				
				<div class="form-group ">
					<label>Admin ID</label>
					<input type="text" name="user_id" class="form-control" size="60"><br>
				</div>

				<div class="form-group ">
					<label>Password</label>
					<input type="password" name="password" class="form-control" size="60"><br>
				</div>


				<div class="form-group ">
					<label>Gender</label><br>
					<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
				</div>



				<div class="form-group ">
					<label>Address</label>
					<input type="text" name="address" class="form-control" size="60"><br>
				</div>

				<div class="form-group">
					<input type="submit" name="action" class="btn btn-primary btn-lg" value="Add Admin">
				</div>




			</div>

			
		</form>

		</div>


		<script>

			function validate(form){
				var n= form.name.value;
				if(n==""){alert("Please add admin name"); return false;}
				
				var id= form.user_id.value;
				if(id==""){alert("Please add admin id"); return false;}
				
				var pass= form.password.value;
				if(pass==""){alert("Please fill in the password"); return false;}
				
				var gender= form.gender.value;
				if(gender==""){alert("Please select admin gender"); return false;}
				
				var address= form.address.value;
				if(address==""){alert("Please fill admin address"); return false;}				
			}

		</script>


		<?php
	}

	else{
		$_SESSION['m']="You are not authorised to access this page.";
		header ("Location: login.php");
	}

}

else{
	$_SESSION['m']="You have to login first";

	header ("Location: form.php");
}

?>