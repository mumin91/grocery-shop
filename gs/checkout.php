<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);
error_reporting(E_ALL^E_NOTICE);
session_start();
ini_set('display_errors', '0');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>

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
  
  <?php include_once "header_user.php"; ?>
    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class="text-center bg-danger"><? echo "are you okay?"; ?></h4>
      <h1>Checkout</h1>

<form action="" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="r.muminur@gmail.com">
<input type="hidden" name="currency_code" value="US">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
          <?php 
          include "cart.php";
          cart();
           ?>
        </tbody>
    </table>
  <a class='btn btn-warning' href="#"><span class='glyphicon'>Pay Now</span></a>
  <a class='btn btn-success' href="index.php"><span class='glyphicon'>Continue Shopping</span></a>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php 
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Shipping Cost</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">BDT <?php 
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?>



</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


    </div>
    <!-- /.container -->



<?php include("footer.php"); ?>


</body>

</html>