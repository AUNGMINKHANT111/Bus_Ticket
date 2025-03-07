<?php 
session_start();
    include 'Connection.php'; 

?>
<?php include("libs/fetch_data.php");?>
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
                <a class="navbar-brand" href="index.html">Bus Booking</a>

            </div>

           
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="header-user.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="buslist.php"><i class="fa fa-truck"></i>Buses</a>
                    </li>
                    <li>
                        <a href="townshiplist.php">  <i >⏏</i> Townships</a>
                    </li>
                   
                   
                    <li>
                        <a href="schedulelist.php"><i class="fa fa-road"></i> Schedules</a>
                    </li>
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
                            Today Schedule List 
                            
                        </h1>
                       <h4 align="ltft" bold><a href='schedule.php?'><img  width='40' height='40'  src="images/icon.png"></a> Add New Schedule</h4>
                  </div> 
                 </div>
            

<title>BHW - Bus Company </title>

 
  <br>

                       
                     
    
   <!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
	

<h1 align="center" > </h1>

  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       
           


	

 
	<table > 

							  <tr>

							  	
							    <td> <h3>Township No<h3> </td>
							    <td><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTownship</h3> </td>
							    					   
							  </tr>

							<?php
							$select="select * from registertownship";
							$ret=mysqli_query($connect,$select);
							$count=mysqli_num_rows($ret);

							for ($i=0; $i < $count ; $i++) 
							{ 
							  $row=mysqli_fetch_array($ret);
							  $id=$row['townshipid'];
							  $name=$row['township'];
							  
							  echo "
							      <tr>
							        
							        <td>$id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							      	
							        
							         <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$name<td>	
							         
							      </tr>

							    ";
							}

							?>
							</table> 
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
