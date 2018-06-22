<?php

$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'hotel_dd');


if(isset($_POST['Make'])){

	$Make=$_POST['Make'];
	$roomtype=$_POST['roomtype'];
	
	$query=mysqli_query($conn,"select * from hotel_avail where location='$Make' && type='$roomtype'");
//	$result= mysql_query($sql);
	
	$rows=mysqli_num_rows($query);
	if($rows==1)
	{	
		$_SESSION['Make'] = $Make;
		session_write_close();
		echo "Authenticated";
		
		header("Location:flight.php");
		//echo "success";
		//exit();	
	}
	else
	{
		 echo "Sorry...Hotel not Available";
 
	}

}

mysqli_close($conn);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
