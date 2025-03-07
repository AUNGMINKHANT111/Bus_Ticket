  
   <?php 
 		
   			include 'admin.php';
			include 'autoid.php';
			include 'schedulefunctions.php';

if(isset($_REQUEST['btnsave']))
{
  $id=$_REQUEST['txtid'];
  $sdate=$_REQUEST['txtschdate'];
  $fdate=$_REQUEST['txtfromdate']; 
  $dtime=$_REQUEST['txtdtime'];
    $atime=$_REQUEST['txtatime'];
  $status=$_REQUEST['txtstatus'];
  $route=$_REQUEST['txtroute'];
  $price=$_REQUEST['txtprice'];
  $driver=$_REQUEST['txtdriver'];
  $carid=$_REQUEST['txtcarid'];
   
  

	$insert="INSERT INTO schedule
				 (`scheduleid`, `scheduledate`)
				 VALUES 
				 ('$id','$sdate')";
	
	$ret=mysqli_query($connect,$insert);

	$size=count($_SESSION['sfunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$ProductID=$_SESSION['sfunctions'][$i]['routeid'];
		$PurchasePrice=$_SESSION['sfunctions'][$i]['scheduledate'];

		$route1=$_SESSION['sfunctions'][$i]['routeid'];
		$arrivaltime=$_SESSION['sfunctions'][$i]['arrival'];
		$depaturetime=$_SESSION['sfunctions'][$i]['depature'];
		$fromdate=$_SESSION['sfunctions'][$i]['fromdate'];
		$fromdate1 = date("Y-m-d", strtotime($fromdate));
		$cartype=$_SESSION['sfunctions'][$i]['cartype'];
		$carid1=$_SESSION['sfunctions'][$i]['carid'];
		$price1=$_SESSION['sfunctions'][$i]['price'];
		$driver1=$_SESSION['sfunctions'][$i]['name'];


		$insert_Detail="INSERT INTO scheduledetail
				 (`scheduleid`,`routeid`, `fromdate`, `arrival`,`depature`,  `carid`, `driver`, `price`)
				 VALUES 
				 ('$id','$route1','$fromdate1','$arrivaltime','$depaturetime','$carid1','$driver1','$price1')";
		
		$ret=mysqli_query($connect,$insert_Detail);

		
	}

	if($ret)
	{
		unset($_SESSION['sfunctions']);
		echo "<script>window.alert(' Process Completed')</script>";
		echo "<script>window.location='Schedule.php'</script>";
		
	}
	else
	{
		echo "<p>Something went wrong  :" . mysqli_error($connect) . "</p>";
	}
}

if(isset($_GET['action'])) 
{
	$action=$_GET['action'];

	if($action==='sch') 
	{
		$route=$_GET['txtroute'];
		$arrivaltime=$_GET['txtatime'];
		$depaturetime=$_GET['txtdtime'];
		$fromdate=$_GET['txtfromdate'];
		
		$carid=$_GET['txtcarid'];
		$scheduleid=$_GET['txtid'];
		$price=$_GET['txtprice'];
		$driver=$_GET['txtdriver'];
		

		Addschedule($route,$arrivaltime,$depaturetime,$fromdate,$carid,$scheduleid,$price);
	}
	elseif($action==='clear')
	{
		Clear();
	}
	elseif($action==='remove') 
	{
		$ProductID=$_REQUEST['routeid'];
		Remove($ProductID);
	}
}
else
{
	$action="";
}
			
 ?>
 
 
 <section class="ftco-section ftco-no-pb ftco-no-pt">
 	<form action="schedule.php"  method="get" class="search-property-1">
    	<input type="hidden" name="action"  value="sch"/>
    	<div class="container">
    		<h2>Create Schedule</h2>
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">

							
								
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          						<h4 for="#">Scheduleid</h4>
		                      <input type="text"class="form-control" name="txtid" value="<?php echo AutoID('schedule','scheduleid','S-',6) ?>"  readonly/>
		                      <h4 for="#"> Schedule date</h4>
		                      <input type="text" name='txtschdate'class="form-control" value="<?php echo date('Y-m-d')?>" readonly>
		          				<h4 for="#">Select Route </h4>
										   <select name="txtroute" id="" class="form-control">
										    <option>Select Route</option>
										    <?php
										    $select="Select * from route";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['togo'];
										      $to=$row['fromgo'];
										      $id=$row['routeid'];

										      echo "<option value='$id'>$to to $name</option>";
										    }
										    ?>

										  </select>
										  
										 
										  
									  <h4 for="#">Select Bus   </h4>
										   <select name="txtcarid" id="" class="form-control">
										    <option>Select Bus Type</option>
										    <?php
										    $select="Select * from car";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $id=$row['carid'];
										      $name=$row['cartype'];
										      echo "<option value='$id'>Bus id:$id,  Bustype:$name</option>";
										    }
										    ?>
										  </select> 
										  
										  	
		                      
		                      	
		                      		
		                       <h4 for="#">From date</h4>
		                      <input type="date" name='txtfromdate'class="form-control" placeholder="Add From Date" >
		                    
		                      
		                       
	                       <h4 for="#">Add Depature Time</h4>
		                      <input type="time" name='txtdtime'class="form-control" placeholder="Add Depature Time " >
		                     
		                    
		                    <h4 for="#">Add Arrivial Time</h4>
		                      <input type="time" name='txtatime'class="form-control" placeholder="Add Arrivial Time " >
		                      
		                    
		                      <h4 for="#">Price</h4>
		                      <input type="text" name='txtprice'class="form-control" placeholder="Add Price " >
		                      
		                      
		                     
		                    
		                      
										  <label for="#">Select Driver  </label>
										   <select name="txtdriver" id="" class="form-control">
										    <option>Select Driver</option>
										    <?php
										    $select="Select * from driver";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['driverid'];
										      $to=$row['name'];
										      echo "<option value='$to'>$to</option>";
										    }
										    ?>
										  </select>
										  <br> 
										  <button type="submit" name='Addschedule' class="btn btn-primary pull-right">Add Schedule</button>

		                    </div>
				              </div>
				             
				            
				              <div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">
				                		             
				              </div>
				              
				         
				            
			              </div>
		        			</div>
			              </div>
		        			</div>
		        			<br> 		        		
		        		</div>
		        		


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
	       
           


	
		       	
   <legend>Schedule Details :</legend>
<?php  
if(!isset($_SESSION['sfunctions'])) 
{
	echo "<p>No Schedule Detail found.</p>";
	exit();
}
?>
<table class="table">
<tr>
	<th>Schedule Id</th>	
	<th>From</th>
	<th>To</th>
	<th>Departure Date</th>	
	<th>Departure Time</th>
	<th>Arrivial Time</th>
	<th>Car Id</th>
	<th>Car Type</th>
	<th>Price</th>
	<th>Driver Name</th>
	
	
	
</tr>
<?php 
	$size=count($_SESSION['sfunctions']);

	for($i=0;$i<$size;$i++)  	{ 
		

	$routeid=$_SESSION['sfunctions'][$i]['scheduleid'];
	$fromgo=$_SESSION['sfunctions'][$i]['fromgo']; 
	$togo=$_SESSION['sfunctions'][$i]['togo'];
	$arrivaltime=$_SESSION['sfunctions'][$i]['arrival'];
	$depaturetime=$_SESSION['sfunctions'][$i]['depature'];
	$fromdate=$_SESSION['sfunctions'][$i]['fromdate'];
	$newDate = date("Y-m-d", strtotime($fromdate));
	$carid=$_SESSION['sfunctions'][$i]['carid'];
	$cartype=$_SESSION['sfunctions'][$i]['cartype'];
	$price=$_SESSION['sfunctions'][$i]['price'];
	$driver=$_SESSION['sfunctions'][$i]['name'];


		echo "<tr>";
		
		echo "<td>$routeid</td>";
		echo "<td>$fromgo</td>";
		echo "<td>$togo</td>";
		echo "<td>$newDate</td>";
		echo "<td>$depaturetime</td>";	
		echo "<td>$arrivaltime </td>";			
		echo "<td>$carid </td>";
		echo "<td>$cartype</td>";
		echo "<td>$price</td>";
		echo "<td>$driver</td>";
		
		echo "</tr>";
	}
?>

<tr>
	<td colspan="7" align="right">

	
	
	</td>	
</tr>
</table>

<input type="submit" name="btnsave" value="Save" class="btn btn-large btn-success"/> 
							<!-- End -->
		        		
		        	</form>
		        	
		        		</section>

 
	
 
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 <script src="assets/js/plugins/counterup.min.js"></script>