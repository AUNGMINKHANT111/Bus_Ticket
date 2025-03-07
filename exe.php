   
  <?php 
		include 'head.php';

	?>
	<br>
		<form action="registertownship.php"  method="post" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<div class="form-field">
		          					<div class="col-md-7">
		          				

		                      <label for="#">Add </label>
		                      <input type="text" name='txtfrom'class="form-control" placeholder="Add  " required="">
		                       <label for="#">Add  </label>
		                      <input type="text" name='txtto'class="form-control" placeholder="Add  " required="">
		                       <label for="#">Ticket </label>

		                      <div class="icon"><span ></span></div>
		                      <select name="txttype" id="" class="form-control">
		                      	<option value="1">Select </option>
		                        <option name="standard" value="standard">Standard</option>
		                        <option name="bussiness" value="bussiness">Bussiness</option>
		                        <option name="VIP" value="VIP">VIP</option>
		                        
		                      </select>		                       <label for="#">Add </label>
		                      <input type="text" name='txtprice'class="form-control" placeholder="Add " required="">

		                    </div>
				              </div>
				              <br>
				              <div class="col-lg align-self-end">
		        				<div >
		        					<div class="form-field">
				                		             <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Register</button>
				                		          <br>


 <?php 
 		include 'foot.php';
  ?>
