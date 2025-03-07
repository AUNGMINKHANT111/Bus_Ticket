   <?php 
			include 'head.php';

	include 'autoid.php';
			include 'schedulefunctions.php';

?>
 
 <form action="aa.php"  method="get" class="search-property-1">
    	<input type="hidden" name="action"  value="sch"/>
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">

							
								
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          						<label for="#">Scheduleid</label>
		                      <input type="text"class="form-control" name="txtid" value="<?php echo AutoID('schedule','scheduleid','S-',6) ?>"  readonly/>
		                      <br>

		          				<label for="#">Select Route </label>
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
										  
										 
										  <br>
									  <label for="#">Select Bus   </label>
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
										  	<br>
		                      <label for="#"> Schedule date</label>
		                      <input type="text" name='txtschdate'class="form-control" value="<?php echo date('Y-m-d')?>" readonly>
		                      		<br>
		                       <label for="#">From date</label>
		                      <input type="date" name='txtfromdate'class="form-control" placeholder="Add From Date" >
		                      <br>

		                       
	                       <label for="#">Add Depature Time</label>
		                      <input type="time" name='txtdtime'class="form-control" placeholder="Add Depature Time " >
		                      <br>
		                    <label for="#">Add Arrivial Time</label>
		                      <input type="time" name='txtatime'class="form-control" placeholder="Add Arrivial Time " >
		                      <br>
		                      <label for="#">Price</label>
		                      <input type="text" name='txtprice'class="form-control" placeholder="Add Price " >
		                      <br>
		                      <label for="#">Status</label>
		                      <input type="text" name='txtstatus'class="form-control" placeholder="Add Status " >
		                      <br>
		                      
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
		                    </div>
				              </div>
				              <br>
				              <div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">
				                		             <button type="submit" name='Addschedule' class="btn btn-primary pull-right">Add Schedule</button>

				              </div>
				              
				              <br>
			              </div>
		        			</div>
			              </div>
		        			</div>
		        			<br> 		        		
		        		</div>
		        	<?php  
if(!isset($_SESSION['sfunctions'])) 
{
	echo "<p>No Schedule Detail found.</p>";
	exit();
}
?>



		        		<fieldset>

 <?php 
 		include 'footad.php'; 
  ?>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
