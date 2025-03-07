   
  <?php 
			include 'head.php';

if (isset($_POST['btnregister']))
{
  $from=$_POST['txtform'];
    $to=$_POST['txtto'];  
  $time=$_POST['txttime'];
  $type=$_POST['txttype'];
  $price=$_POST['txtprice'];

  $insert="insert into schedule (fromgo,togo,time,type,price) values ('$from','$to','$time','$type','$price')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('  Successful');</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }
}
			
 ?>
 <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">

							<form action="schedule.php"  method="post" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          						<h4> Add Schedule</h4>

		          				

                                  
                                	<div class="form-field">
		          					<div class="col-md-8">
		          						<label for="#">From</label>
										   <select name="txtform" id="" class="form-control">
										    <option>Select the location</option>
										    <?php
										    $select="Select * from registertownship";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['name'];
										      $id=$row['townshipid'];

										      echo "<option value='$name'>$name</option>";
										    }
										    ?>
										  </select> 
										  <label for="#">To</label>
										   <select name="txtto" id="" class="form-control">
										    <option>Select The Location</option>
										    <?php
										    $select="Select * from registertownship";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['name'];
										      $id=$row['townshipid'];

										      echo "<option value='$name'>$name</option>";
										    }
										    ?>
										  </select>
										  
										  <label for="#">Date</label>
		                     
		                      <input type="Date" name='txtprice'class="form-control" placeholder="Select Date " required>
		                        <label for="#">Nationality</label>
		                     
		                      <div class="icon"><span ></span></div>
				                      <select name="txttime" id="" class="form-control">
				                      	<option value="1">Select </option>
				                        <option name="Myanmar" value="Myanmar">Myanmar</option>
				                        <option name="Foreigner" value="Foreigner">Foreigner</option>
				                       
				                       </select>
				                        <label for="#">Number of seat</label>
		                     
		                      <div class="icon"><span ></span></div>
				                      <select name="txttime" id="" class="form-control">
				                      	<option value="">Select </option>
				                        <option  value="1">1</option>
				                        <option  value="2">2</option>
				                         <option value="3">3</option>
				                        <option value="4">4</option>
				                         <option  value="5">5</option>
				                        <option  value="5">6</option>
				                         <option value="7">7</option>
				                        <option value="8">8</option>
				                         <option value="9">9</option>
				         
				                       
				                       </select>
										
		                    </div>

		                       
		                      
				              </div>
				              <br>
				              <div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">
				                		             <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Search</button>

				              </div>
			              </div>
		        			</div>
			              </div>
		        			</div>
		        			<br>     		
		        			
		        		</div>
		        			<br>
							 <br>
							<table class="table"> 
							  <tr>
							    <td>Schedule Id</td>    
							    <td>Schedule</td> 
							    <td>Time</td>    			      
							    <td>Type</td>    			      
							    <td>Price</td>    			      

							    <td>Delete</td>
							    <td>Update</td>

							  </tr>

							<?php
							$select="select * from schedule";
							$ret=mysqli_query($connect,$select);
							$count=mysqli_num_rows($ret);

							for ($i=0; $i < $count ; $i++) 
							{ 
							  $row=mysqli_fetch_array($ret);
							  $id=$row['id'];
							  $from=$row['fromgo'];
							 $to=$row['togo'];
							  $time=$row['time'];
							  $type=$row['type'];
							  $price=$row['price'];
							  echo "
							      <tr>
							        <td>$id</td>
							        <td>$from to $to</td>
							        <td>$time</td>
							        <td>$type</td>
							        <td>$price</td>
							       
							          

							        <td><a href='deletetownship.php?id=$id'>Delete</a></td>
							                <td><a href='updatetownship.php?id=$id'>Update</a></td>

							      </tr>
							    ";
							}

							?>
							</table>
							<!-- End -->
		        		
		        	</form>
		        	

		        </div>
					</div>
	    	</div>
	    </div>

    </section>


 <?php 
 		include 'foot.php';
  ?>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
