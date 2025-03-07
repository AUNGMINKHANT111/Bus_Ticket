   
  <?php 
			include 'admin.php';
			include 'autoid.php';
		if(!isset($_SESSION['adminid']))
   {
        echo"<script>alert('You Need To Login');</script>";
      echo "<script>
                window.location='login.php';
                </script>";
   }

if (isset($_POST['btnregister']))
{
   $id=$_POST['txtcarid'];
   $lisense=$_POST['txtcarlisense'];
  $type=$_POST['txtcartype'];
  $brand=$_POST['txtbrand'];  
  
  $sets=$_POST{'txtsets'};
  $image=$_FILES['txtimg']['name'];
   $folder="carimage/";
   if($image)
   {
    $filename=$folder."".$image;
    $copy=copy($_FILES['txtimg']['tmp_name'],$filename);
   }
   $sideimage=$_FILES['txtsideimg']['name'];
   $folder="carimage/";
   if($sideimage)
   {
    $filename=$folder."".$sideimage;
    $copy=copy($_FILES['txtsideimg']['tmp_name'],$filename);
   }

   $insideimage=$_FILES['txtinsideimg']['name'];
   $folder="carimage/";
   if($insideimage)
   {
    $filename=$folder."".$insideimage;
    $copy=copy($_FILES['txtinsideimg']['tmp_name'],$filename);
   }

  $insert="insert into car (carid,carlisensec,carbrand,cartype,carimage,sideimage,insideimage,numberofsets) values ('$id','$lisense','$brand','$type','$image','$sideimage','$insideimage','$sets')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('Successful Added Car');</script>";
     echo"<script>window.location='buslist.php';</script>";
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
							<br>
							<form action="registercar.php"  method="post" class="search-property-1"enctype="multipart/form-data">
								<h3 class="text-left title mb-3">Register Bus</h3>
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					
		        					
		          					<div class="col-md-7">

		          						<label for="#">Bus Id</label>
		                      <input type="text"class="form-control" name="txtcarid" value="<?php echo AutoID('car','carid','B-',3) ?>"  readonly/>
		          					
		          					<br>
		          						<label for="#">Add Bus Lisesnse</label>
		                     
		                      <input type="text" name='txtcarlisense'class="form-control" placeholder="Add Bus Lisense No" required>
		                      <br>
		                      <label for="#">Add Bus Brand</label>
		        					
		                      <input type="text" name='txtbrand'class="form-control" placeholder="Add Bus Brand Name" required><br>

		                       <label for="#">Number Of Sets</label>
		        					
		                      <input type="Number" name='txtsets'class="form-control" placeholder="Number of sets" required>
		                      	<br>
		                      			<div class="form-group">
		        					<label for="#">Select Cartype</label>
		        			
		                      <div class="icon"><span ></span></div>
		                      <select name="txtcartype" id="" class="form-control">
		                      	<option value="1">Select Bus Type</option>
		                        <option name="standard" value="standard">Standard</option>
		                        <option name="bussiness" value="bussiness">Bussiness</option>
		                        <option name="VIP" value="VIP">VIP</option>
		                        
		                      </select>
		                     <br>
		                      <label for="#">Add  Profile Image</label>		        					
		                      <input type="file" name='txtimg' class="form-control" placeholder="Add Bus Image" required="">
			               <br>
							<label for="#">Add  Side Image</label>		        					
		                      <input type="file" name='txtsideimg' class="form-control" placeholder="Add Side Image" required="">
		                      <br>
		                      
		                      			 <label for="#">Add Bus Inside Image</label>		        					
		                      <input type="file" name='txtinsideimg' class="form-control" placeholder="Add Inside Image" required="">             
		                      	<br>
		                      	 <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Add New Bus</button>

		                     
		                    </div>

				              </div>
			              </div>
			              <br>
			              		<div class="col-lg align-self-right">
		        				<div >
		        					<div class="form-group">

				            
				              </div>
			              </div>
		        			</div>
		                    </div>
				              </div>
				             
				              	

			              </div>
			            
			              
		        			</div> 

		        				<br>
		        			
		        		</div>

							 <br>
							
							<!-- End -->
		        		  
										
									
									
								
							   
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
  
