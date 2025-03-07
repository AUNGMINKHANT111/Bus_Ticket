<?php 
  include 'admin.php'; 

  if (isset($_GET['id']))
{
  $id=$_GET['id'];

$delete="select * from registertownship where townshipid=$id";
$ret=mysqli_query($connect,$delete);
$row=mysqli_fetch_array($ret);
$id=$row['townshipid'];
$from=$row['township'];
}			
if(isset($_POST['btnregister']))
{
 
  $township=$_POST['txttownship']; 
   
  $insert="update  registertownship 
  set township='$township' 
  where townshipid='$id'
  ";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('  Successfully Updated');</script>";
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
              <h2>Township Update</h2> <br>
              <form action="updatetownship.php"  method="post" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="col-md-7">
                   
                      <br>
                          <label for="#">Update Township</label>
                         
                          
                          
                          <input type="text" name='txttownship'class="form-control" value='<?php echo $from?>'required="">
                          <br>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          
                          <button type="submit" value="Register" name='btnregister' class="btn btn-primary pull-right">Update</button> 

                          
                          

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
  
