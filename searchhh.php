   
  <?php 
			include 'head.php';


if (isset($_POST['btnregister']))
{
  $name=$_POST['txttownship'];

  $insert="insert into township (name) values ('$name')";
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

							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Add Township</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                     
		                      <input type="text" name='txttownship'class="form-control" placeholder="Add New Township" required="">

		                    </div>
				              </div>
			              </div>
		        			</div>     		
		        			<div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">
				                <button type="submit" value="Register" name='btnregister'class="form-control btn btn-primary"> Register</button>
				              </div>
			              </div>
		        			</div>
		        		</div>
		        		
		        	</form>
		        	

		        </div>
					</div>
	    	</div>
	    </div>

    </section>


 <?php 
 		include 'foot.php';
  ?>
