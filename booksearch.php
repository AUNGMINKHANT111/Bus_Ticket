
<?php

 session_start();
  include 'Connection.php'; 
if(isset($_POST['btnsearch']))
{

  $from=$_POST['txtfrom'];
  $to=$_POST['txtto'];
  $date=$_POST['txtdate'];
  $date1 = date("Y-m-d", strtotime($date));
   
  $insert=
  "SELECT * FROM route r, scheduledetail sd WHERE fromgo like '$from' and togo like '$to' and fromdate like '$date1'and r.routeid= sd.routeid
   ";
  $ret=mysqli_query($connect,$insert);
  $count=mysqli_num_rows($ret);
  if($count)
  {
                     $todays_date = date("Y-m-d");
                   
         if ($date1 >= $today )
          {
          $file = mysqli_fetch_assoc($ret);
          $_SESSION['routeid']=$file['routeid'];
          $sid=$file['scheduleid'];
          $rid=$file['routeid'];
          $date=$file['fromdate'];
            echo"<script>window.location='busdisplay.php?date=$date&sid=$sid&rid=$rid'
            
           </script>"; 
          }
  }
  
      else 
      {
              echo"<script> 
                  alert('No Routes On This Date Please Choose Another Date' );</script>";
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
        <a class="navbar-brand" href="">BHW<span>  Bus Company</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
      
          
        
        <div class="collapse navbar-collapse" id="ftco-nav">
          <div id=da></div>
        <div id=dt></div> 
        <div id=time></div>
        
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active"><a href="booksearch.php" class="nav-link">Home</a></li>
            
            
            <li class="nav-item"><a href="car.php" class="nav-link">Our Buses</a></li>
             
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <h4 >            
             
                    
                </h4>
    
   <div class="hero-wrap" style="background-image: url('images/balloon.png');" data-stellar-background-ratio="1">

      <div class="overlay"></div>

      <div class="container">
         
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">

          	<div class="text">
               
               
            
	            <h1 class="mb-4">Now <span>BHW Bus Company </span> <span> around you </span></h1>
              <p style="font-size: 30px;">Our Routes:<br>

              <?php
              $select="select * from route";
              $ret=mysqli_query($connect,$select);
              $count=mysqli_num_rows($ret);

              for ($i=0; $i < $count ; $i++) 
              { 
                $row=mysqli_fetch_array($ret);
                $id=$row['routeid'];
                $name=$row['name'];
                  
              
                
                echo "
                    <tr>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$name <br></td>                                        
                      
                           
                    </tr>
                  ";
              }

              ?>

              

	            	
	            </a>
            </div>

          </div>
         <div class="col-lg-2 col" weight="10"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex" weight="10">
            
          </div>
        </div>
      </div>
    </div>


<form action="booksearch.php"   method="post" class="request-form ftco-animate">
  <section class="ftco-section ftco-no-pb ftco-no-pt">
   <a ><img src="images/op.png"></a>
   
   <h1 align="center" b i>Search Your Booking</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate mb-5">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">From</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="txtfrom" id="" class="form-control">
                            <?php
                        $select="Select * from registertownship";
                        $ret=mysqli_query($connect,$select);
                        $count=mysqli_num_rows($ret);
                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($ret);
                          $name=$row['township'];
                          $id=$row['townshipid'];

                          echo "<option value='$name'>$name</option>";
                        }
                        ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#"> To</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="txtto" id="" class="form-control">
                          
                            <?php
                        $select="Select * from registertownship";
                        $ret=mysqli_query($connect,$select);
                        $count=mysqli_num_rows($ret);
                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($ret);
                          $name=$row['township'];
                          $id=$row['townshipid'];

                          echo "<option value='$name'>$name</option>";
                        }
                        ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Date</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <input type="date" name="txtdate"class="form-control"  >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Nationality</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="" id="" class="form-control">
                            <option value="Myanmar">Myanmar</option>
                            <option value="Foreigner">Foreigner</option>
                            
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
               
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="Search" name="btnsearch" class="form-control btn btn-primary">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</form>
  
     <section class="ftco-section services-section img" style="background-image: url(images/Mercedes.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">BHW Express</span>
            <h2 class="mb-3">Our Routes</h2>
          </div>

        </div>
        <div class="row">
          <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/naypyitaw.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">Yangon⇋NayPyiTaw</span>

                 
                </div>

              </div>
            <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAll Day</span>
                
              </div>
            </div>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/mandalay.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">Yangon⇋Mandalay</span>
                 
                </div>
              </div>
             <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAll Day</span>
                
              </div>
            </div>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/Sittwe.jpg);">
                <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbsp&nbspYangon⇋Sittwe&nbsp&nbsp&nbsp</span>
                 
                </div>
              </div>
            <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAll Day</span>
                
              </div>
            </div>
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url(images/view.png);">
                <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbspYangon ⇋ Bagan&nbsp&nbsp</span>
                 
                </div>
              </div>
             <div class="price-wrap d-flex">
                  <span class="rate">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAll Day</span>
                
              </div>
            </div>

          
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Autoroad</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/bone_hein"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/heinswaiz2001"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/kyawtheinsoe149/?hl=en"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


            <a ><img src="images/blacklogo.png"></a>
             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/heinswaiz2001" target="_blank">Heins Waiz</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    
<style>
#da,#dt,#time{text-align:left;padding:7px;font-size: 18px; color:#000;}</style>

   

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>8
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

  <script>function clock(){var date=new Date();var weekday=date.getDay();var year=date.getYear();var month=date.getMonth();var day=date.getDate();var hour=date.getHours();var minute=date.getMinutes();var second=date.getSeconds();var days=new Array ('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday' );var months=new Array('January','February','March','April','May','June','July','August','September','October','November','december');var monthname=months[month];var dayname=days[weekday];var ap;if(year<1000){year=year+1900} if(hour>=12){hour=hour-12;ap='PM';}else{ap='AM';} if(minute<10){minute='0'+minute} if(second<10){second='0'+second};
document.getElementById('time').innerHTML=hour+' : '+ minute +' : '+second+' ' +ap; 
document.getElementById('da').innerHTML=dayname;
document.getElementById('dt').innerHTML=monthname+' '+day+', '+year;
setTimeout('clock()',1000 )}window.onload=function(){clock();}
// Widget Code by https://karvitt.com/widgets/
</script>
    
  </body>
</html>