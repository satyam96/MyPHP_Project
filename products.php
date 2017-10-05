<?php
    require("includes/common.php");
    
?>
<!DOCTYPE html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <html>
     <head>
        <title>Lifestyle store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     <body>
         <?php
            include("includes/header.php");
            include("includes/check_if_added.php");
            ?>
         <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </div>
            
            <div class="row" id="wach">
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="canon.jpg" alt="">
                            <div class="caption">
                                <h3>Canon DSLR</h3>
                                <p>Price Rs.40000</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="canon1.jpg" alt="">
                            <div class="caption">
                                <h3>Canon EOS</h3>
                                <p>Price Rs.45000</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="nikon.jpg" alt="">
                            <div class="caption">
                                <h3>Nikon DSLR</h3>
                                <p>Price Rs.65000</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="sony.jpg" alt="">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price Rs.51500</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
            </div>
            
            <div class="row" id="wach">
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="titan.jpg" alt="">
                            <div class="caption">
                                <h3>Titan Watch</h3>
                                <p>Price Rs. 4999</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="ft.jpg" alt="">
                            <div class="caption">
                                <h3>Fast track wrist watch</h3>
                                <p>Price Rs. 1999</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="timex.jpeg" alt="">
                            <div class="caption">
                                <h3>Timex watch</h3>
                                <p>Price Rs.2599</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="watch.jpg" alt="">
                            <div class="caption">
                                <h3>Denim Watches</h3>
                                <p>Price Rs.999</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
            </div>
            
            <div class="row" id="wach">
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="xx.jpg" alt="">
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Price Rs. 499</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="xxl.jpg" alt="">
                            <div class="caption">
                                <h3>Allen Solly Shirts</h3>
                                <p>Price Rs. 999</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="m.jpeg" alt="">
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Price Rs.399</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="shirt.jpg" alt="">
                            <div class="caption">
                                <h3>Party Shirts</h3>
                                <p>Price Rs.699</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div> 
                    </a>
                </div>
            </div>
        </div>
         <?php
            include('includes/footer.php');
        ?>
     </body>
     
 </html>
