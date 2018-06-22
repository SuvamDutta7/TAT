<?php
session_start();
$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn,'reg_db');
if(isset($_POST['email']))
{

	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from reg_user where email='$email' && password='$password'");
//	$result= mysql_query($sql);
	
	$rows=mysqli_num_rows($query);
	if($rows==1)
	{	
		//$f_login = f_login($email, $password);
		/*$_SESSION['email'] = $email;
		session_write_close();
		echo "Authenticated";
		
		header("Location:flight.php");*/
		//echo "success";
		//exit();	
		$_SESSION['login_user']=$email; // Initializing Session
		header("location: index.php"); // Redirecting To Other Page
	 
		
		
		
	}
	else
	{
		 echo "No credentials found\\nTry again.";
 
	}

}

mysqli_close($conn);
?>

