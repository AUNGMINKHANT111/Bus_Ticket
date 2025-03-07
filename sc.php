<?php

 session_start();
  include 'Connection.php'; 

  if(isset($_POST['btnsearch']))
{
  $from=$_POST['txtfrom'];
  $to=$_POST['txtto'];
  $date=$_POST['txtdate'];
  $insert=
  $insert=
  "SELECT * FROM route, scheduledetail WHERE fromgo like '$from' and togo like '$to'
   ";
  $ret=mysqli_query($connect,$insert);
  $count=mysqli_num_rows($ret);
  if($count)
  {
          $file = mysqli_fetch_assoc($ret);
          $_SESSION['routeid']=$file['routeid'];
         
            echo"<script>alert(' Login Success');
           </script>"; 
   
  }
  
      else 
      {
              echo"<script> 
                  alert('Incorrect login!' );</script>";
      }
  }

?>

<form action="sc.php"   method="post" class="request-form ftco-animate">
  <section class="ftco-section ftco-no-pb ftco-no-pt">
   <a ><img src="images/op.png"></a>
   
   <h1 align="center" b i>Search Your Booking</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate mb-5">
              <form action="#" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">From</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="txtfrom" id="" class="form-control">
                            <?php
                        $select="Select * from registertownship";
                        $ret=mysqli_query($connect,$select);
                        $count=mysqli_num_rows($ret);
                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($ret);
                          $name=$row['township'];
                          $id=$row['townshipid'];

                          echo "<option value='$name'>$name</option>";
                        }
                        ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#"> To</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="txtto" id="" class="form-control">
                          
                            <?php
                        $select="Select * from registertownship";
                        $ret=mysqli_query($connect,$select);
                        $count=mysqli_num_rows($ret);
                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($ret);
                          $name=$row['township'];
                          $id=$row['townshipid'];

                          echo "<option value='$name'>$name</option>";
                        }
                        ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Date</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <input type="date" name="txtdate"class="form-control"  >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Nationality</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span ></span></div>
                          <select name="" id="" class="form-control">
                            <option value="Myanmar">Myanmar</option>
                            <option value="Foreigner">Foreigner</option>
                            
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Number Of Sets</label>
                      <div class="form-field">
                        <div class="select-wrap">
                        
                          <select name="" id="" class="form-control">                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                           
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="Search" name="btnsearch" class="form-control btn btn-primary">
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
</form>
