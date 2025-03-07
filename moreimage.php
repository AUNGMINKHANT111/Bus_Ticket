<?php 
	include 'Connection.php';

	if (isset($_GET['id']))
{
  $id=$_GET['id'];

$delete="select * from car where carid='$id'";
$ret=mysqli_query($connect,$delete);
$row=mysqli_fetch_array($ret);
$pf=$row['carimage'];
$sideimg=$row['sideimage'];
$inside=$row['insideimage'];

}
 ?>

 <table style="width:100" class="table"> 
  <div class="form-group">
                      <a class="navbar-brand" href=""><img src="images/op.png"></a>   
                    <h1 align="center">Image Detail</h1> 

                        <div class="col-md-7">
                <tr>
                  <td> <h2 align="center">Profile Image</h2>  </td>                  
                  
               </tr>
               <?php
              $select="select carimage from car where carid='$id' ";
              $ret=mysqli_query($connect,$select);
              $count=mysqli_num_rows($ret);

              for ($i=0; $i < $count ; $i++) 
              { 
                $row=mysqli_fetch_array($ret);
                 $pf=$row['carimage'];
               

                echo "

                    <tr>                     
                      <td><img src='carimage/$pf' width='500px' height='400'></td>                    
                      </tr>                                   

                  ";
              }


              ?>


                 <div class="col-md-7">
                   <br>
                <tr>
                   <br>
                  <td> <h2 align="center">Side Image</h2>  </td>  
                      <td>  </td>                        
                  <td> <h2 align="center">Inside Image</h2>  </td>                
                  
               </tr>
               <?php
              $select="select sideimage,insideimage from car where carid='$id' ";
              $ret=mysqli_query($connect,$select);
              $count=mysqli_num_rows($ret);

              for ($i=0; $i < $count ; $i++) 
              { 
                $row=mysqli_fetch_array($ret);
                 $sideimg=$row['sideimage'];
                    $insideimg=$row['insideimage'];
               

                echo "

                    <tr>                     
                      <td><img src='carimage/$sideimg' width='500px' height='400'></td>
                      <td> </td>    
                       <td><img src='carimage/$insideimg' width='500px' height='400'></td>                     
                      </tr>                                   

                  ";
              }


              ?>
                <br>
                                          <td><br><a href='buslist.php?id=d'><h2>Back </h2></a></td>

              </table>
              <!-- End -->
                  
  </table>