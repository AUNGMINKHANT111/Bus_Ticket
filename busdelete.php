<?php
include('Connection.php');

$id=$_GET['id'];

$delete="Delete from car where carid=$id";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('buslist.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>