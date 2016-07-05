<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Daily Bazar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="pull-left">
                    <ul class="nav navbar-nav">
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="registration.php">Registraition</a>
                    </li>
                    <li>
                        <a href="login.php">Log In</a>
                    </li>
                     <li>
                        <a href="checkout.php">Checkout</a>
                    </li>
                    <li >
                        <a href="contact.php">Contact</a>
                    </li>
                    <?php
                    if ($_SESSION['user_id']!="" and $_SESSION['password']!=""){?>
                    <li>
                        <a href="change_password.php"><?php echo "Change Password"; ?></a>
                    </li>
                    <li>
                        <a href="logout.php"><?php echo "Log Out"; ?></a>
                    </li>
                    <?php  } ?>
                   
                    

                </ul>
                </div>

                <div class="pull-right">
                    <?php
                if ($_SESSION['user_id']!="" and $_SESSION['password']!="") {?>
                    <ul class="nav navbar-nav">
                    <li><a href="#"><?php echo "Hello ".$_SESSION[name];?></a></li>
                    </ul>
                    <?php
                }

                  ?>
                </div>

         
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->    </nav>