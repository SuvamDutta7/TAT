<?php 
session_start();
$db=mysqli_connect('localhost','root','','reg_db');

$errors= array();


if(isset($_POST['register']))
{

	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$add= $_POST['add'];
	$contact= $_POST['contact'];
	//$passport= $_POST['passport'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$cpassword= $_POST['cpassword'];	

	
	
	
	
	
	//password = md5($password); //encryption
	$sql="insert into reg_user(fname,lname,address,contact,email,password) values('$fname','$lname','$add','$contact','$email','$password')";
	mysqli_query($db,$sql);
	//$_SESSION['message']="Logged in";
	//$_SESSION['fname']=$fname;
	header("location:index.php");			
	

}


?>
