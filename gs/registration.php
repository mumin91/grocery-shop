<?php
error_reporting(E_ALL^E_NOTICE);

session_start();

?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Registration</title>
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
		<body>
			<?php include_once "header_user.php";
		 ?>





<h3 align="center"><?php
echo $_SESSION['m'];
$_SESSION['m'] ="";
?></h3>



        				
<div class="row">
<div class="col-sm-6 col-sm-offset-3 form-box">
<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign up in our site</h3>
                            		<p>Enter your details below to sign up:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
	

	<div class="form-bottom">
	<form role="form"  class="registration-form" role="form" action="action.php" method="post"  onSubmit ="return validateSignUp(this)">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-first-name">Name</label>
	                        	<input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Username</label>
	                        	<input type="text" name="user_id" placeholder="Username..." class="form-last-name form-control" id="form-last-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="form-last-name form-control" id="form-last-name">
	                        </div>
	                        
	                        <div class="form-group ">
					<label class="sr-only">Gender</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
				</div>
	                        
	                        <div class="form-group">
	                        	<label class="sr-only">Address</label>
	                        	<textarea name="address" placeholder="Address..." 
	                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
	                        </div>
	                        <button type="submit" class="btn" name="action" value="Sign Up">Sign me up!</button>
	                    </form>
		
	</div>
</div>
	


</div>
	                    
        			






						
		



<script>

	function validateSignUp(form){
			var n= form.name.value;
			if(n==""){alert("Please write your name"); return false;}

			var id= form.user_id.value;
			if(id==""){alert("Please write your user id"); return false;}

			var pass= form.password.value;
			if(pass==""){alert("Please fill in the password"); return false;}
			var cpass= form.c_password.value;
			if(cpass==""){alert("Please fill in the confirm password"); return false;}
			if (pass!=cpass){alert("Please enter matching password"); return false;}

			var gender= form.gender.value;
			if(gender==""){alert("Please select your gender"); return false;}

			var address= form.address.value;
			if(address == ""){alert("Please fill your address"); return false;}				
		}

</script>



		</body>

		</html>












        			