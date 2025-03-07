<?php 

function Addschedule($route,$arrivaltime,$depaturetime,$fromdate,$carid,$scheduleid,$price)

{	 
	 include 'Connection.php'; 

	
 $query="SELECT * FROM route,car,driver
				WHERE routeid='$route'";
	$ret=mysqli_query($connect,$query);
	$count=mysqli_num_rows($ret);

	if($count<1) 
	{
		echo "<p>No Record Found.</p>";
		exit();
	}

	$arr=mysqli_fetch_array($ret);
	$fromgo=$arr['fromgo'];
	$togo=$arr['togo'];
	$cartype=$arr['cartype'];
	$driver=$arr['name'];
	
	
	if(isset($_SESSION['sfunctions'])) 
	{
		$index=IndexOf($carid);

		if($index== -1) 
		{
			$size=count($_SESSION['sfunctions']);

			$_SESSION['sfunctions'][$size]['scheduleid']=$scheduleid;
			$_SESSION['sfunctions'][$size]['routeid']=$route;
			$_SESSION['sfunctions'][$size]['fromgo']=$fromgo;
			$_SESSION['sfunctions'][$size]['togo']=$togo;
			$_SESSION['sfunctions'][$size]['arrival']=$arrivaltime;
			$_SESSION['sfunctions'][$size]['depature']=$depaturetime;
			$_SESSION['sfunctions'][$size]['fromdate']=$fromdate;
			$_SESSION['sfunctions'][$size]['cartype']=$cartype;
			$_SESSION['sfunctions'][$size]['carid']=$carid;
			$_SESSION['sfunctions'][$size]['price']=$price;
			$_SESSION['sfunctions'][$size]['name']=$driver;


		}
		else 
		{
			echo'<script>window.alert("Dublicate")</script>';
		
		}
		
		
	}
	else
	{
		$_SESSION['sfunctions']=array();
			$_SESSION['sfunctions'][0]['scheduleid']=$scheduleid;
			$_SESSION['sfunctions'][0]['routeid']=$route;
			$_SESSION['sfunctions'][0]['fromgo']=$fromgo;
			$_SESSION['sfunctions'][0]['togo']=$togo;
			$_SESSION['sfunctions'][0]['arrival']=$arrivaltime;
			$_SESSION['sfunctions'][0]['depature']=$depaturetime;
			$_SESSION['sfunctions'][0]['fromdate']=$fromdate;
			$_SESSION['sfunctions'][0]['cartype']=$cartype;
			$_SESSION['sfunctions'][0]['carid']=$carid;
			$_SESSION['sfunctions'][0]['price']=$price;
			$_SESSION['sfunctions'][0]['name']=$driver;
	}
	echo "<script>window.location='schedule.php'</script>";
}

function Remove($route)
{
	$index=IndexOf($route);

	if($index != -1) 
	{
		unset($_SESSION['sfunctions'][$index]);
		$_SESSION['sfunctions']=array_values($_SESSION['sfunctions']);
	}
	echo "<script>window.location='schedule.php'</script>";
}

function Clear()
{
	unset($_SESSION['sfunctions']);
	echo "<script>window.location='schedule.php'</script>";
}



function IndexOf($routeid)
{
	if(!isset($_SESSION['sfunctions']))
	{
		return -1;
	}

	$size=count($_SESSION['sfunctions']);

	if($size<1) 
	{
		return -1;
	}

	for ($i=0;$i<$size;$i++) 
	{ 
		if($routeid == $_SESSION['sfunctions'][$i]['routeid']) 
		{
			return $i;
		}
	}
	return -1;
}

?>