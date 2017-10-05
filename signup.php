<?php
    include ('includes/common.php');
if (isset($_SESSION['email'])) { 
    header('location: products.php'); 
    }
?>  

 <!DOCTYPE html>
 <html>
     <head>
         <title>SignUp @Lifestyle store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     
     <body>
         <?php include('includes/header.php'); ?>
         <div class="container-fluid decor_bg "id="box">
             <div class="row">
                 <div class="container">
                     <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                         <h4>Sign Up</h4>
                         <form method="post" action="signup_script.php">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email id" required="true" 
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email"><!--?php echo $_GET['m1']; ?-->
                             </div>
                             <div class="form-group">
                                 <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                             </div>
                             <div class="form-group">
                                  <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><!--?php echo $_GET['m2']; ?-->
                             </div>
                             <div class="form-group">
                                 <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                             </div>
                             <div class="form-group">
                                 <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                             </div>
                             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                             
                         </form>
                     </div>
                 </div>
                    
             </div>
         </div>
         <?php
            include("includes/footer.php");
         ?>
     </body>
 </html>
