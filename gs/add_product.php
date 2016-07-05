<?php
error_reporting(E_ALL^E_NOTICE);

session_start();



if($_SESSION['user_id']!="" and $_SESSION['password']!=""){
	
	if($_SESSION['user_type']=='superadmin' or 'admin'){
		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Add Products</title>
			<meta charset="utf-8">
			<link rel="icon" type="image/jpg" href="images/fav.jpg">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		</head>
		<body>

			<?php
			include_once "header_admin.php"; ?> 
			<h3 align="center"><?php echo $_SESSION['m']; ?></h3>
			<?php
			$_SESSION['m']="";
			?>


			
			

			<div id="page-wrapper">

				<div class="container-fluid">




					<div class="col-md-12">

						<form action="action.php" method="post" enctype="multipart/form-data" onSubmit ="return validate(this)">


							<div class="col-md-8">

								<div class="form-group">
									<label for="product-title">Product Name </label>
									<input type="text" name="product_name" class="form-control" enctype="multipart/form-data">

								</div>


								<div class="form-group">
									<label for="product-title">Product Description</label>
									<textarea name="product_desc" id="" cols="30" rows="10" class="form-control"></textarea>
								</div>



								<div class="form-group row">

									<div class="col-xs-3">
										<label for="product-price">Product Price</label>
										<input type="type" name="price" class="form-control" size="60">
									</div>
								</div>






							</div><!--Main Content-->


							<!-- SIDEBAR-->


							<aside id="admin_sidebar" class="col-md-4">


								<div class="form-group">
									<input type="submit" name="action" class="btn btn-primary btn-lg" value="Add Product">
								</div>


								<!-- Product Categories-->

								<div class="form-group">
									<label for="product-title">Product Type</label>

									<select name="product_type" id="" class="form-control">
										<option value="">Select Category</option>


										<option>Grocery</option>


										<option>Food</option>


										<option>Drinks</option>


										<option>Baby Food</option>


										<option>Bakery Items</option>


										<option>Fruits</option>


										<option>Vegetables </option>


										<option>Sweets</option>


									</select>


								</div>








								<div class="form-group">
									<label for="product-title">Product Quantity</label>
									<input type="text" name="quantity" class="form-control">
								</div>

							</form>

							<!-- Product Image -->

							<div class="form-group">
								<label>Product Image</label>
								<input type="file" name="product_image" id="product_image">

							</div>
						</form>



					</aside><!--SIDEBAR-->



				</form>



			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</body>
	</html>



	

	<script>

		function validate(form){
			var pn= form.product_name.value;
			if(pn==""){alert("Please Write Product Name"); return false;}

			var pt= form.product_type.value;
			if(pt==""){alert("Please Enter a product type"); return false;}

			var q= form.quantity.value;
			if(q==""){alert("Please write the quantity of product"); return false;}

			var p= form.price.value;
			if(p==""){alert("Please write the price of product"); return false;}

			var pi= form.product_image.value;
			if(pi==""){alert("Please select an image for the product"); return false;}

			var pi= form.product_desc.value;
			if(pi==""){alert("Please write a description for the product"); return false;}	
		}

	</script>






	<?php
}

else{
	$_SESSION['m']="You are not authorised to access this page.";
	header ("Location: form.php");
}

}

else{
	$_SESSION['m']="You have to login first";

	header ("Location: login.php");
}

?>


















