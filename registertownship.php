  <?php 
  include 'admin.php'; 
			
if(isset($_POST['btnregister']))
{
 
  $from=$_POST['txttownship'];  

   
  $insert="insert into registertownship (township) values ('$from')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('  Successfully Added');</script>";
     echo"<script>window.location='townshiplist.php';</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }

}
			
 ?>


 
  <br>
 <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate mb-5">
              <h2>Township Register</h2> <br>
              <form action="registertownship.php"  method="post" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="col-md-7">
                     
                          <label for="#">Add Township</label>
                          <input type="text" name='txttownship'class="form-control" placeholder="Add New Township" required="">
                          <br>
                          <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Register</button>


                        </div>
                      </div>
                      <br>
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
                  <br>
               <br>
             
                
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
  
