<?php
include('Connection.php');

$id=$_GET['id'];

$delete="Delete from registertownship where townshipid='$id'";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('registertownship.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>