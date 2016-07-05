<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);
error_reporting(E_ALL^E_NOTICE);
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>

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
    
    $sql= mysql_query("SELECT * FROM products");
    ?>


    <div class="container">

        <div class="row">

          
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


            <div class="col-md-9">

                

                <div class="row">
                    <?php
                    $i=1;
                    while ($raw = mysql_fetch_array($sql)) {

                        $product = <<<DELIMETERE

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <a href="item.php?id={$raw[product_id]}"><img src="uploads/{$raw[product_image]}" alt="Product Image"></a>
                                <div class="caption">
                                    <h4 class="pull-right">BDT {$raw[price]}</h4>
                                    <h4><a href="item.php?id={$raw[product_id]}">{$raw[product_name]}</a></h4>
                                    <p>{$raw[product_desc]}</p>
                                    <a href="cart.php?add={$raw[product_id]}" class="btn btn-primary">Add to cart</a>
                                </div>


                                
                            </div>
                        </div>
DELIMETERE;

                        echo $product;

                       
                        
                        $i++;
                    }
                    ?>


                </div><!-- ROw ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->

     <?php include 'footer.php'; ?>


    
</body>
</html>