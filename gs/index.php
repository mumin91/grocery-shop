<?php
ini_set('display_errors', '0');

error_reporting(E_ALL^E_NOTICE);

session_start();

$con=mysql_connect("localhost","root","");
mysql_select_db("grocery_shop",$con);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daily Bazar | Home</title>
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
    <?php include_once "header_user.php";?>

    <!-- Page Content -->
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

                <div class="row carousel-holder">

                    <div class="col-md-12">

                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="slide-image" src="images/slide2.jpg" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="images/slide1.jpg" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="images/slide3.jpg" alt="">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>                        
                    </div>

                </div>

                <div class="row">

  <h2>Latest Products</h2>
  <?php $sql= mysql_query("SELECT * FROM products ORDER BY product_id DESC LIMIT 3"); ?> 
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

<br> <br>





                </div><!-- ROw ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->

   <?php include 'footer.php'; ?>

</body>

</html>
