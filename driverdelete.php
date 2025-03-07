<?php
include('Connection.php');

$id=$_GET['id'];

$delete="Delete from driver where driverid=$id";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('driverlist.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>