<?php
session_start();
    include 'Connection.php'; 

    $id=$_GET['date'];
    $sid=$_GET['sid'];
     $rid=$_GET['rid'];
   

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
  
 <link rel="icon" sizes="76x76"  href="../images/mylogo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <title>BHW - Bus Company </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">


     <h1 style="font-family:courier;color:green;font-size:90px" align="center" ><b>BHW Express </h1>
<br>
   


    
</head>
<body>
 

  

                       
                     
  <style>
#da,#dt,#time{text-align:left;padding:7px;font-size: 18px; color:#000;}</style>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    </html>
    <script>function clock(){var date=new Date();var weekday=date.getDay();var year=date.getYear();var month=date.getMonth();var day=date.getDate();var hour=date.getHours();var minute=date.getMinutes();var second=date.getSeconds();var days=new Array ('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday' );var months=new Array('January','February','March','April','May','June','July','August','September','October','November','december');var monthname=months[month];var dayname=days[weekday];var ap;if(year<1000){year=year+1900} if(hour>=12){hour=hour-12;ap='PM';}else{ap='AM';} if(minute<10){minute='0'+minute} if(second<10){second='0'+second};
document.getElementById('time').innerHTML=hour+' : '+ minute +' : '+second+' ' +ap; 
document.getElementById('da').innerHTML=dayname;
document.getElementById('dt').innerHTML=monthname+' '+day+', '+year;
setTimeout('clock()',1000 )}window.onload=function(){clock();}
// Widget Code by https://karvitt.com/widgets/
</script>
<section>
  

   <!DOCTYPE html>
<html>

<head>
  
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-family:courier;color:brown;font-size:20px
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
  

<h1 align="center" > </h1>
&nbsp&nbsp 
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
         
           
<?php
$delete="select * from car c,scheduledetail s,route r where s.routeid=r.routeid and s.carid=c.carid and s.fromdate='$id'and s.scheduleid='$sid'and s.routeid='$rid'";

            $ret=mysqli_query($connect,$delete);
              $count=mysqli_num_rows($ret);

         $files = mysqli_fetch_all($ret, MYSQLI_ASSOC);

?>


 
  <table> 

                    

   
 <?php 


        foreach ($files as $file): 
               $id=$file['carid'];            
                $brand=$file['price'];
                $type=$file['cartype'];              
                $image=$file['carimage'];
                 $route=$file['name'];

                 $dtime=$file['depature'];
                 $date=$file['fromdate'];
                 $date1 = date("d-M-Y", strtotime($date));
                   $rid=$file['routeid'];   
                 
                 echo "
                    <tr>
                    
                                                               
                      <td> Cartype = $type <br> $route <br> Depature Date=$date1 <br> Depature Time=$dtime</td>      
                 
                          <td><img src='carimage/$image' width='150px' height='100px' ><br><a href='moreimage.php?id=$id'>More Image</a></td>    
                      <td> Price=$brand <br> <u>1sets x $brand</td> 
                     <td> <a href='seesets.php?sid=$rid&ctype=$type&date=$date' > Booking</a> </td>

                    </tr>

                  ";
                   
      endforeach;?>          

              </table> 

</section>




