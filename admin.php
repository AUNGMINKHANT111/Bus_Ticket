<?php include("libs/fetch_data.php");
        session_start();
   include 'Connection.php'; 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BUS BOOKING SYSTEM</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default top-navbar" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Bus Booking</a>

            </div>

           
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="registercar.php"><i class="fa fa-truck"></i> BUS Register</a>
                    </li>
                    <br>
                    <li>
                        <a href="registertownship.php"><img width='17px' height='17px' src=" images/images.png"  >   </i>&nbsp&nbspTownship Register</a>
                    </li>
                    <br>
                    <li>
                        <a href="driver.php"><i ><img width='17px' height='17px' src=" images/people-icon_7.png"></i> Add New Driver</a>
                    </li>

                    <br>
                    <li>
                        <a href="route.php">  <i class="fa fa-road"></i> Crete Routes</a>
                    </li>
                   
                   <br>
                    <li>
                        <a href="schedule.php"><i class="fa fa-road"></i>&nbsp&nbspCreate Schedules</a>
                    </li>
                    <br>
                    
                   <li>
                        <a href="header-user.php"><i >∎</i> See All List</a>
                    </li>
                    <li>
                        <a href="logout.php"><i >∎</i> Back To Main Menu</a>
                    </li>
                   
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           BHW BUS Company Admin Part
                            
                        </h1>
                      
                  </div> 
                 </div>


