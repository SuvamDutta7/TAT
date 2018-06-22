<?php 
session_start();
$db=mysqli_connect('localhost','root','','t1');

$errors= array();


if(isset($_POST['sub']))
{

	$name1= $_POST['t1'];
	$name2= $_POST['t2'];
	
	
	
	
	
	
	//password = md5($password); //encryption
	$sql="insert into test(name1,name2) values('$name1','$name2')";
	mysqli_query($db,$sql);
	//$_SESSION['message']="Logged in";
	//$_SESSION['fname']=$fname;
	//header("location:test.php");			
	

}


?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>

<form method="post" action="">
name1<input type="text" name="t1" value="1" />
name2<input type="text" name="t2"  value="2"/>
<input type="submit" name="sub" value="submit" />
</form>


</body>
</html>
