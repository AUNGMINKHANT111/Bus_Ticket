   <?php 
			include 'admin.php';
						include 'autoid.php';


if(isset($_POST['btnregister']))
{
 
 	 $id=$_POST['txtid'];  
  	  $from=$_POST['txtfromgo'];  
  		$to=$_POST['txttogo'];  
    $name=$_POST['txtname'];  



   
  $insert="insert into route (routeid,fromgo,togo,name) values ('$id','$from','$to','$name')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('  Successfully Added'); window.location.assign('routelist.php');</script>";
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
<h2>Route Register</h2>
<br>
							<form action="route.php"  method="post" class="search-property-1">
		        		<div class="row">

		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          				
		          						<label for="#">Route Id</label>
		                      <input type="text"class="form-control" name="txtid" value="<?php echo AutoID('route','routeid','R-',4) ?>"  readonly/>

		                      <label for="#">Select From Township </label>
										   <select name="txtfromgo" id="" class="form-control">
										    <option>Select Township</option>
										    <?php
										    $select="Select * from registertownship";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['township'];
										      
										      $id=$row['townshipid'];

										      echo "<option value='$name'>$name </option>";
										    }
										    ?>

										  </select>
										   <label for="#">Select From Township </label>
										   <select name="txttogo" id="" class="form-control">
										    <option>Select Township</option>
										    <?php
										    $select="Select * from registertownship";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['township'];
										      
										      $id=$row['townshipid'];

										      echo "<option value='$name'>$name </option>";
										    }
										    ?>

										  </select>
										   <label for="#">Route Name</label>
		                      <input type="text" name='txtname'class="form-control" placeholder="Add Route Name" required="">
		                      <br>
		                         <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-left"> Add </button>

		                       
		                    </div>
				              </div>
				              <br>
				              <div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">

				                		          
				              </div>
				              <br>
			              </div>
		        			</div>
			              </div>
		        			</div>
		        			<br>     		
		        			
		        		</div>
		        			
		        		
		        		
		        	</form>
		        	

		        </div>
					</div>
	    	</div>
	    </div>

    </section>



  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
