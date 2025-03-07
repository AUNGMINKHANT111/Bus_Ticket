<?php
session_start();
    include 'Connection.php'; 
   if (isset($_GET['sid']))
{
  $id=$_GET['sid'];

$delete="select * from car c,scheduledetail s,route r where r.routeid=s.routeid and c.carid=s.carid and scheduleid='$id'";
$ret=mysqli_query($connect,$delete);
$row=mysqli_fetch_array($ret);

                $id=$row['carid'];            
                $brand=$row['price'];
                $type=$row['cartype'];              
                $image=$row['carimage'];
                 $route=$row['name'];
                 $dtime=$row['depature'];
                 $date=$row['fromdate'];
                 $date1 = date("Y-m-d", strtotime($date));
};

?>


           



 
  <table > 

               
                 

   
 <?php 

$delete="select * from car c,scheduledetail s,route r where r.routeid=s.routeid and c.carid=s.carid and scheduleid='$id'";

            $ret=mysqli_query($connect,$delete);
              $count=mysqli_num_rows($ret);            
              for ($i=0; $i < $count ; $i++) 
              {
              
               $id=$row['carid'];            
                $brand=$row['price'];
                $type=$row['cartype'];              
                $image=$row['carimage'];
                 $route=$row['name'];

                 $dtime=$row['depature'];
                 $date=$row['fromdate'];
                 $date1 = date("Y-m-d", strtotime($date));
                  


                 echo "
                    a
                  ";
                }
                  
      ?>           

              </table> 


