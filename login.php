<?php
    require('includes/common.php');
    
if (isset($_SESSION['email'])) {
    header('location: products.php');
}    
?>
<!DOCTYPE html>

 <html>
     <head>
         <title>Login @Lifestyle store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     
     <body>
         <?php
            include('includes/header.php');
        ?>
         <div id="box" class="container">
            <div class="row row-style">
                <div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                    
                        <div class="panel-body">
                            <p class="text-warning">Login to make purchase</p>
                            <div  class="container">
                                <div class="col-lg-5 col-xs-12 ">
                                    <form action="login_submit.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                        </div>    
                                        <br>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                        </div>    
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                        <!--?php echo $_GET['ERROR'];?--><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                        <div class="panel-footer">
                            <p>Don't have an account ?<a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
         <?php
            include('includes/footer.php');
        ?>
     </body>
 </html>
