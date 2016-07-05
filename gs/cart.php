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


  <?php 


if ($_SESSION['user_id'] != "" and $_SESSION['password'] != ""){
	if(isset($_GET['add'])) {


  $query = mysql_query("SELECT * FROM products WHERE product_id=" . mysql_real_escape_string($_GET['add']). " ");


  while($row = mysql_fetch_array($query)) {


    if($row['quantity'] != $_SESSION['product_' . $_GET['add']]) {
      $_SESSION['product_' . $_GET['add']]+=1;
      header("Location: checkout.php");
    } 

    else {
      echo ("We only have " . $row['quantity'] . " " . "{$row['product_name']}" . " available");
      header("Location: checkout.php");
    }






  }



}




if(isset($_GET['remove'])) {

  $_SESSION['product_' . $_GET['remove']]--;

  if($_SESSION['product_' . $_GET['remove']] < 1) {

    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    header("Location: checkout.php");

  } 

  else {

   header("Location: checkout.php");

  }


}


if(isset($_GET['delete'])) { 

  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);

  header("Location: checkout.php");


}




function cart() {
  $total = 0;
  $item_quantity = 0;
  $item_name = 1;
  $item_number =1;
  $amount = 1;
  $quantity =1;
  foreach ($_SESSION as $name => $value) {

    if($value > 0 ) {

      if(substr($name, 0, 8 ) == "product_") {


        $length = strlen($name - 8);

        $id = substr($name, 8 , $length);


        $query = mysql_query("SELECT * FROM products WHERE product_id = " . mysql_real_escape_string($id). " ");
       

        while($row = mysql_fetch_array($query)) {

          $sub = $row['price']*$value;
          $item_quantity +=$value;

         
          $product = <<<DELIMETER

          <tr>
            <td>{$row[product_name]}<br>

              <img width='100' src='uploads/{$row[product_image]}'>

            </td>
            <td>BDT {$row[price]}</td>
            <td>{$value}</td>
            <td>BDT {$sub}</td>
            <td><a class='btn btn-warning' href="cart.php?remove={$row[product_id]}"><span class='glyphicon glyphicon-minus'></span></a>   <a class='btn btn-success' href="cart.php?add={$row[product_id]}"><span class='glyphicon glyphicon-plus'></span></a>
              <a class='btn btn-danger' href="cart.php?delete={$row[product_id]}"><span class='glyphicon glyphicon-remove'></span></a></td>         
            </tr>

            <input type="hidden" name="item_name_{$item_name}" value="{$row[product_name]}">
            <input type="hidden" name="item_number_{$item_number}" value="{$row[product_id]}">
            <input type="hidden" name="amount_{$amount}" value="{$row[price]}">
            <input type="hidden" name="quantity_{$quantity}" value="{$row[quantity]}">


DELIMETER;

            echo $product;

            $item_name++;
            $item_number++;
            $amount++;
            $quantity++;



          }


          $_SESSION['item_total'] = $total += $sub;
          $_SESSION['item_quantity'] = $item_quantity;


        }

      }

    }



  }

}
else {
	header("Location: cart_error.php");
	header( "refresh:5;url=login.php" );
}

  ?>

      

</body>

</html>






















 