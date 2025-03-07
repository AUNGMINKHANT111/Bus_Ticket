
<?php
    session_start();
    include 'Connection.php'; 
    include 'autoid.php';
    $id=$_GET["sid"];
    $type=$_GET["ctype"];
    $date=$_GET["date"];
   
    if (isset($_POST['btnregister']))
{
   $id=$_POST['txtid'];
  $route=$_POST['txtroute'];
   $tdate=$_POST['txtdate'];
   $ddate=$_POST['txtddate'];
   $dtime=$_POST['txttime'];
   $type=$_POST['txttype'];    
   $seats=$_POST['txtseats'];
   $price=$_POST['txtprice'];
   $carid=$_POST['txtcarid'];

 $tdate1 = date("Y-m-d", strtotime($tdate));
 $date1 = date("Y-m-d", strtotime($ddate));

  $insert1="insert into booking (bookingid,bookingdate,route,type,ddate,dtime,seats,price,carid) 
  values
   ('$id','$tdate1','$route','$type','$date1','$dtime','$seats',$price,$carid)";
  $ret1=mysqli_query($connect,$insert1);

  if($ret1)
  {
      $file1 = mysqli_fetch_assoc($ret1);
      $_SESSION['bookingid']=$file1['bookingid'];
          $bid=$file1['bookingid'];
     echo"<script>window.location='cuslogin.php?bid=$id';</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }
}
?>

    




     <h1 style="font-family:courier;color:green;font-size:90px" align="center" ><b> BHW Express </h1>


  



      <div class="container">
         
           


 

                    

   

<?php
                           
         $select="select * from car c,scheduledetail s,route r where s.carid=c.carid and c.cartype='$type'and s.fromdate='$date'and s.routeid='$id' and s.routeid=r.routeid " ;

            $ret=mysqli_query($connect,$select);
             $count=mysqli_num_rows($ret);
            $row=mysqli_fetch_array($ret);
       
               $id=$row['carid'];            
                $brand=$row['price'];
                $type=$row['cartype'];              
                $image=$row['carimage'];
                 $route=$row['name'];
                $seat=$row['numberofsets'];
                 $dtime=$row['depature'];
                 $date=$row['fromdate'];
                 $date1 = date("d-M-Y", strtotime($date));
                  $brand=$row['price'];
                  
                 echo "
                    <tr>
                         
                                                    
                      <td> </td> 
                    
                    </tr>
                <img src='carimage/$image' width='300px' height='230px' >
                  ";
                   
      ?>          
             
           

              <form  action="seesets.php"  method="post" class="search-property 2" nctype="multipart/form-data">

                <input type="hidden"class="form-control" name="txtid" value="<?php echo AutoID('booking','bookingid','B-',6) ?>"  readonly/>

                                <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Booking Date</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value="<?php echo date('Y-M-d')?>" class="form-control" name="txtdate" readonly >

              </div>
               <div class="form-group">
                 
                <input style="font-family:courier;color:green;font-size:20px" type="hidden" value=' <?php echo $id?>'class="form-control" name="txtcarid" readonly >
                
              </div>
                
                                <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Route Name</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $route?>'class="form-control" name="txtroute" readonly >

              </div>
               <div class="form-group">
                <label style="font-family:courier;color:black;font-size:20px" for="#">Bus Type</label>
                <input style="font-family:courier;color:green;font-size:20px"type="text" value='<?php echo $type?>'class="form-control" name="txttype" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">From Date</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $date1?>'class="form-control" name="txtddate" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Depature Time</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $dtime?>'class="form-control" name="txttime" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Abaliable Seats</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $seat?>'class="form-control" name="" readonly >
                
              </div>
              <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Price MMk</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value='<?php echo $brand  ?> ' class="form-control" name="txtprice" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Number Of Seats</label>
                <input style="font-family:courier;color:green;font-size:20px" type="number" class="form-control" name="txtseats" placeholder="Number of seats" required="">
              </div>
               <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-left">Booking   </button>

       </form>


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