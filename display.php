
<?php
session_start();
    include 'Connection.php'; 
     include 'autoid.php';
   
    if (isset($_POST['btnregister']))
{
   $cid=$_POST['txtcid'];
   $bid=$_POST['txtbid'];
 $ddate=$_POST['txtdate'];
  $price=$_POST['txtprice'];
  $route=$_POST['txttype'];
 $seat=$_POST['txtseat'];
  $date=$_POST['txtddate'];

$pid=$_POST['txtpid'];
 $date1 = date("Y-m-d", strtotime($ddate));

  $insert1="insert into p (id,customerid,bookingid, bookingdate,tpayment,route,seat,ddate) 
  values
   ('$pid','$cid','$bid','$date1','$price','$route','$seat','$date')";
  $ret1=mysqli_query($connect,$insert1);

  if($ret1)
  {
    
      
    echo"<script>alert(' Successfull go to paymanet');window.location='payment.php?id=$pid';
            </script>"; 
  }
  else
  {
    echo mysqli_error($connect);
  }
}
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


     <h1 style="font-family:courier;color:green;font-size:90px" align="center" ><b> BHW Express </h1>

<br>
   


    
</head>
<body>
 

  

                       
                     
 
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
         
           


 
  <table> 

<?php
$bid=$_GET["bid"];
    $cid=$_GET["cid"];
                           
         $select="select * from 
          booking,customer where customerid='$cid' and bookingid like'$bid'
         ";

            $ret=mysqli_query($connect,$select);
            
            $row=mysqli_fetch_array($ret);
       
               $cuid=$row['customerid'];  
                      $name=$row['name'];       
               $boid=$row['bookingid'];            
                $route=$row['route'];            
                $ddate=$row['ddate'];            
                $dtime=$row['dtime'];            
                $seats=$row['seats'];  
                      $type=$row['type'];        
                $price=$row['price'];  
                 $carid=$row['carid'];  
                $tprice=$seats*$price;   

                 echo "
                   
                
                  ";
                   
      ?> 
                    

</table>

              <form  action="display.php"  method="post" class="search-property 2" nctype="multipart/form-data">

                <input style="font-family:courier;color:green;font-size:20px" type="hidden" value=' <?php echo $cuid?>'class="form-control" name="txtcid" readonly >
                <input style="font-family:courier;color:green;font-size:20px" type="hidden" value=' <?php echo $boid?>'class="form-control" name="txtbid" readonly >
                <input style="font-family:courier;color:green;font-size:20px" type="hidden" value="<?php echo date('Y-M-d')?>" class="form-control" name="txtdate" readonly >

                  <input type="hidden"class="form-control" name="txtpid" value="<?php echo AutoID('p','id','p-',6) ?>"  readonly/>
               
                
                                <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Customer Name</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $name?>'class="form-control" name="txtroute" readonly >

              </div>
               <div class="form-group">
                <label style="font-family:courier;color:black;font-size:20px" for="#">Route</label>
                <input style="font-family:courier;color:green;font-size:20px"type="text" value='<?php echo $route?>'class="form-control" name="txttype" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">From Date</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $ddate?>'class="form-control" name="txtddate" readonly >
                
              </div>
               <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Depature Time</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $dtime?>'class="form-control" name="txttime" readonly >
            
             
              <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#">Car Type</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value='<?php echo $type ?>'class="form-control" name="txtname" readonly >
                
              </div>
                  <div class="form-group">

                 <label style="font-family:courier;color:black;font-size:20px" for="#">Number Of Seats</label>
                 <input style="font-family:courier;color:green;font-size:20px" type="text" value=' <?php echo $seats?>'class="form-control" name="txtseat" readonly >
              </div>
              <div class="form-group">
                 <label style="font-family:courier;color:black;font-size:20px" for="#"> Total Price</label>
                <input style="font-family:courier;color:green;font-size:20px" type="text" value='<?php echo $tprice ?>'class="form-control" name="txtprice" readonly >
                
              </div>
               
               <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-left">Checkout   </button>

                  </form>
</section>

<?php  

      
 ?>   


