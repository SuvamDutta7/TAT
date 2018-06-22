<div style="border:double" class="jumbotron text-center">

 <h1 align="center">Ticket Cancellation</h2>
</div>
<?php
$link = mysqli_connect('localhost', 'root', '', 'flight');

if (isset($_POST['cancel'])) 
{
	$sql = "SELECT * FROM passengers WHERE flight_id = '$_POST[flight_id]' AND password='$_POST['password']'";
    $result=mysqli_query($link,$sql);


echo "Ticket has been cancelled!";
while($row = mysqli_fetch_array($result))
{ 
echo "&nbsp;<br> Dear&nbsp;";
echo '<b>';
echo $row['fname'];
echo '</b>';
echo "! &nbsp;<BR>As per the <b>terms and conditions </b> 25% amount will be deducted from the paid amount and you will be paid with RS.";

echo ($row['fare']*0.25);
echo '<br>';

}
//mysqli_query("DELETE FROM `passengers` WHERE `pin` = '$_POST[pin]'"); //or die(mysql_error());
	
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>



<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

body {
  font-family: Georgia, "Times New Roman", Times, serif;
}


form input, form button {

 border: 2px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 10px 10px 10px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 15px;
 
}
::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }


#flights {
  position: inherit;
      left: 50;
  top: 50;
  width: 20%;
  height: 50%;
  background-size: cover;
      
}


form {
  position: relative;
  background: rgba(130,130,130,.3);
 padding: 10px 10px;
  border: 1px solid;
}
</style>


</head>

<body>
<div id="flights">
<form method="post" action="#">

<p><label style="display:block" id="label1">Flight_Id:</label>
						<input type="text" name="flight_id"  id="fid" placeholder="Enter Flight Id" /></p>
						<p><label style="display:block" id="label2">Password:</label>
						 <input type="password" name="password"  id="password" placeholder="***********" /></p>

<input type="submit" name="cancel" id="cancel" value="Cancel"/>

</form>
 </div>


</body>
</html>
