<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);
error_reporting(E_ALL^E_NOTICE);
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Product Page</title>
<link rel="icon" type="image/jpg" href="images/fav.jpg">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/shop-homepage.css" rel="stylesheet">

	<link href="css/styles.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    	<!-- Navigation -->
    	<?php include_once "header_user.php";?>   <!-- Page Content -->
    	<div class="container">

    		<!-- Side Navigation -->


    		<div class="col-md-3">
    			<p class="lead">Catagories</p>
    			<div class="list-group">

    				<a href='category.php?category=Grocery' class='list-group-item'>Grocery</a>


    				<a href='category.php?category=Food' class='list-group-item'>Food</a>


    				<a href='category.php?category=Drinks' class='list-group-item'>Drinks</a>


    				<a href='category.php?category=Baby Food' class='list-group-item'>Baby Food</a>


    				<a href='category.php?category=Bakery Items' class='list-group-item'>Bakery Items</a>


    				<a href='category.php?category=Fruits' class='list-group-item'>Fruits</a>


    				<a href='category.php?category=Vegetables' class='list-group-item'>Vegetables</a>


    				<a href='category.php?category=Sweets' class='list-group-item'>Sweets</a>


    			</div>
    		</div>




    		<?php if (isset($_GET['id'])) {
    			
    			$sql = mysql_query("SELECT * FROM products WHERE product_id='$_GET[id]'");
    		}
    		$row = mysql_fetch_array($sql);

    		?>




    		<div class="col-md-9">

    			<!--Row For Image and Short Description-->

    			<div class="row">

    				<div class="col-md-7">


    				<img hieght="200" widht="200" class="img-responsive" src="uploads\<?php echo $row[product_image]; ?>" alt="">


    				</div>

    				<div class="col-md-5">

    					<div class="thumbnail">


    						<div class="caption-full">
    							<h2><?php echo $row[product_name]; ?></h2>
    							<hr>
    							<h4><b>BDT </b><?php echo $row[price]; ?></h4>
    							<p><b>Product Description: </b><?php echo $row[product_desc]; ?></p>





    							<form action="">
    								<div class="form-group">
    									<a href="cart.php?add=<?php echo $row[product_id]; ?>" class="btn btn-primary">Add to cart</a>
    								</div>
    							</form>

    						</div>

    					</div>

    				</div>


    			</div><!--Row For Image and Short Description-->


    		


    	




    		</div><!-- col-md-9 ends here -->



    	</div>
    	<!-- /.container -->


    	<div class="container">

    		<?php include_once "footer.php";  ?>

    	</body>

    	</html>