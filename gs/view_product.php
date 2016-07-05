<?php
error_reporting(E_ALL^E_NOTICE);
ini_set('display_errors', '0');

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);


?>

<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>View Products</title>
			<link rel="icon" type="image/jpg" href="images/fav.jpg">
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
		



//selecting all data from product table of database
	$sql = mysql_query("select * from products");

//delete product from database
if($_GET['did']){
	mysql_query("delete from products where product_id='$_GET[did]'");
	header("Location: view_product.php");
}

?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Delete Product</th>
            </tr>
        </thead>

	<?php
	$i=1;
	while ($p = mysql_fetch_array($sql)) {
		?>
		<tbody>
			<tr>
			<td><?php echo $i; ?></td>
			<td><img src="uploads/<?php echo $p['product_image'];?>" width="50" height="50"></td>
			<td><?php echo $p['product_name'];?></td>
			<td><?php echo $p['product_type'];?></td>
			<td><?php echo $p['product_desc'];?></td>
			<td><?php echo $p['quantity'];?></td>
			<td><?php echo $p['price'];?></td>
			<td><?php echo "<a href=\"javascript:delproduct(id=$p[product_id])\">Delete</a>";?></td>
		</tr>
		</tbody>


	<?php
	$i++;
	}
	?>

	
</table>

<?php include 'footer.php'; ?>

<script>
	function delproduct(id){
		var msg = confirm("Are you sure you want to delete this product?");

	if (msg) {
		window.location = "view_product.php?did="+id;
	}
	}
	</script>
</body>

</html>