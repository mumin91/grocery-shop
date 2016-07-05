<?php
ini_set('display_errors', '0');
error_reporting(E_ALL^E_NOTICE);
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);

extract($_POST);
$action=$_POST['action'];

Switch($_POST['action']){
	case "Sign Up":
	$_SESSION['m']= "Registration Successful!!";
	mysql_query("insert into user(id,name,user_id,password,gender, address, user_type) values (null,'$_POST[name]','$_POST[user_id]','$_POST[password]','$_POST[gender]','$_POST[address]', 'user')");
	header("Location: registration.php");
	break;




	case "Log In":
	$sql=mysql_query("select * from user where user_id='$_POST[user_id]' and password='$_POST[password]'");
	$cnt=mysql_num_rows($sql);
	$user=mysql_fetch_array($sql);
	if($cnt==1){	
		$_SESSION['id']= $user['id'];
		$_SESSION['user_id']= $user['user_id'];
		$_SESSION['name']=$user['name'];
		$_SESSION['password']= $user['password'];
		$_SESSION['user_type']= $user['user_type'];
		
		if($_SESSION['user_type'] != "user") {
			header("Location: admin.php");
		}

		else {
			header("Location:index.php");
		}

	}
	else{
		$_SESSION['m']= "You are not registered";

		header("Location: login.php");

	}

	break;




	case "Add Admin":
	mysql_query("insert into user(id,name,user_id,password,gender,address,user_type) values(null,'$_POST[name]','$_POST[user_id]','$_POST[password]','$_POST[gender]','$_POST[address]', 'admin')");
	$_SESSION['m'] =  "New admin Successfully added!!!";
	

	header("Location: add_admin.php");
	break;




	case "Add Product":
	
	$file = rand(1000,100000)."-".$_FILES['product_image']['name'];
    $file_loc = $_FILES['product_image']['tmp_name'];
 $file_size = $_FILES['product_image']['size'];
 $file_type = $_FILES['product_image']['type'];
 $folder="uploads/";
move_uploaded_file($file_loc,$folder.$file);

$sql="INSERT INTO products (product_id, product_name, product_desc, product_type, quantity, price, product_image) VALUES (NULL, '$_POST[product_name]', '$_POST[product_desc]', '$_POST[product_type]', '$_POST[quantity]', '$_POST[price]', '$file')";

mysql_query($sql);
$_SESSION['m'] = "New Product has been succesfully added.. :)";
header("Location: add_product.php");
break;




case "Save Password":
if($_SESSION['password'] != $_POST['old_p']) {
	$_SESSION['m']="Your old password is not correct";
	header("Location:change_password.php");
}

elseif ($_POST['confirm_p'] != $_POST['new_p']) {
	$_SESSION['m'] = "Your Passwords are not matching!!";
	header("Location:change_password.php");
}

else{
	mysql_query("update user set password = '$_POST[new_p]' where id = '$_SESSION[id]'");
	$_SESSION['password']= $_POST['new_p'];
	$_SESSION['m']= "Password succesfully changed!!";
	header("Location: change_password.php");
}
break;





case "Send mail":

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$human = intval($_POST['human']);
	$from = 'Grocery Contact Form'; 
	$to = 'r.muminur@gmail.com'; 
	$subject = 'Message from Grocery Contact';

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	header("Location:contact.php");

        // Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}

        // Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

        //Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}
        //Check if simple anti-bot test is correct
	if ($human !== 5) {
		$errHuman = 'Your anti-spam is incorrect';
	}

// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}

break;

}

?>

