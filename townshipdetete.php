<?php
include('Connection.php');
    
if(!isset($_SESSION['adminid']))
   {
        echo"<script>alert('You Need To Login');</script>";
      echo "<script>
                window.location='login.php';
                </script>";
   }

$id=$_GET['id'];

$delete="Delete from registertownship where townshipid=$id";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('townshiplist.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>