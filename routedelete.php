<?php
include('Connection.php');

$id=$_GET['id'];

$delete="Delete from route where routeid='$id'";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('routelist.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>