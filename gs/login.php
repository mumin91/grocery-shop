<?php
error_reporting(E_ALL^E_NOTICE);

session_start();

?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Log In</title>
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
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="action.php" method="post" class="login-form" onSubmit ="return validateLogIn(this)">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user_id" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn" name="action" value="Log In">Sign in!</button>
			                    </form>
			                    <input type="checkbox"> Keep me logged in
		                    </div>
		                    <a href="registration.php">Don't have an accoount? Sign up!!!</a>
                        </div>
                    </div>






						
		



<script>

	function validateLogIn(form){
		var id= form.user_id.value;
		if(id==""){alert("Please enter your user id"); return false;}
		
		var pass= form.password.value;
		if(pass==""){alert("Please enter the password"); return false;}
	}
</script>



		</body>

		</html>