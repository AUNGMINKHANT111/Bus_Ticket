   <?php 
			include 'admin.php';
			if(!isset($_SESSION['adminid']))
   {
        echo"<script>alert('You Need To Login');</script>";
      echo "<script>
                window.location='login.php';
                </script>";
   }

if (isset($_POST['btnregister']))
{
 
  $name=$_POST['txtname'];
  $phno=$_POST['txtphno'];
  $add=$_POST['txtaddress'];
  $nrc=$_POST['txtnrc'];
    $lisense=$_POST['txtlisense'];

  

  $insert="insert into driver (name,phoneno,address,driverlisenseno,nrcno) values ('$name','$phno','$add','$nrc','$lisense')";
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

							<form action="driver.php"  method="post" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          				
		          						 <div class="logo">
		          						 <h2>Driver Register</h2>
                        
                     </div>
                     <br>
		                      <label for="#">Add Driver Name</label>
		                      <input type="text" name='txtname'class="form-control" placeholder="Add Your Name" required="">
<br>
		                       <label for="#">Add Phone Numner</label>
		                      <input type="number" name='txtphno'class="form-control" placeholder="Add Your Phone Numner" required="">
<br>
		                      <label for="#">Add Address</label>
		                      <input type="text" name='txtaddress'class="form-control" placeholder="Add Your Address" required="">
<br>
		                        <label for="#">Add Nrc Number</label>
		                      <input type="text" name='txtnrc'class="form-control" placeholder="Add Your Nrc Number" required="">
<br>
		                        <label for="#">Add Driver Lisense Number</label>
		         <br>             <input type="text" name='txtlisense'class="form-control" placeholder="Add Your Driver Lisense No" required="">
<br>
		                      <div class="form-field">
				                		             <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Register</button>
		                    </div>
				              </div>
				              <br>
				              <div class="col-lg align-self-end">
		        				<div >
		        					

				              </div>
				              <br>
			              </div>
		        			</div>
			              </div>
		        			</div>
		        			<br>     		
		        			
		        		</div>
		        			
		        		
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
  
