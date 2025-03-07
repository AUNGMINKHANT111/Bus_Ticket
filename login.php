<!DOCTYPE html>
<?php

 session_start();
    include 'Connection.php'; 
if(isset($_SESSION['count']))
  {
    $count=$_SESSION['count'];
    if($count==3)
    {
      echo "<script>
          alert('3 Time Login Fail')
          window.location='LoginTimer.php'
        </script>";

    }
  }
if(isset($_POST['btnsave']))
{
  $name=$_POST['txtname'];
  $password=$_POST['txtpassword'];
  $insert=
  "SELECT * from admin
  where name='$name'and password='$password'
   ";
  $ret=mysqli_query($connect,$insert);
  $count=mysqli_num_rows($ret);
  if($count)
  {
          $file = mysqli_fetch_assoc($ret);
          $_SESSION['adminid']=$file['adminid'];
          $_SESSION['name']=$row['name'];

            echo"<script>alert(' Login Success');
            window.location='header-user.php';</script>"; 
   
  }
  
      else 
       {
          $insert1="SELECT * from customer where name='$name' and password='$password'";
         $ret1=mysqli_query($connect,$insert1);
         $count1=mysqli_num_rows($ret1);
              
        if ($count1)
              {
                   $row=mysqli_fetch_array($ret1);
                  $customerid=$row['customerid'];
                  $SESSION['CUID11']=$customerid;
                   $UserName=$row['name'];
                     $uid=$row['customerid'];
                    echo"<script>alert('Customer Login Success, Welcome $UserName');window.location='bookinglist.php?id=$uid';</script>";
              }
            else 
            {
                    echo"<script>alert('Login Fail');window.location='login.php';</script>";
            }
        }
  
  }
  

?>
<html lang="en">
  <head>

    <title>BHW - Bus Company </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
         <a class="navbar-brand" >BHW<span> Bus Company</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="booksearch.php" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link">About</a></li>
            
            <li class="nav-item"><a href="car.php" class="nav-link">Our Buses</a></li>
            
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/banner2.jpg');" data-stellar-background-ratio="0.4">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">

	            </a>
            </div>
          </div>
          <div class="col-lg-1 col"></div>
          <div class="col-lg-5 col-md-4 mt-5 mt-md-9 d">
          	<form action="login.php"  method="post" class="search-property-5">
             
          		<h2>Login Your Account:</h2>
              <br>

	    				<div class="form-group">
	    					<label for="" class="mb-4" style="font-size: 30px;"class="label"> <h4>User Name</h4></label>
	    					<input type="text" placeholder="Enter User Name" class="form-control" name="txtname" required="" >
	    				</div>
              <br>
	    				<div class="form-group">
	    					<label for="" class="mb-4" style="font-size: 30px;" class="label"><h4>Password</h4></label>
	    					<input type="password" placeholder="Enter Password" class="form-control" name="txtpassword" required="">
	    				</div>
	    				
	            <div class="form-group" >

	              <input  type="submit" value="Login" name="btnsave" class="btn btn-primary py-2 px-4">
	            </div>

	    			</form>

          </div>

        </div>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/heinswaiz2001" target="_blank">Heins Waiz</a>
      </div>

    </div>

    
    

   

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>