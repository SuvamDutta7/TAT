<div class="jumbotron text-center">

<?php
if(isset($_POST['search']))
{
  if(isset($_POST['radio']))
  { 
    if (isset($_POST['radio']) && isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']))
  {
  	$source = $_POST['selected_text'];
	$destination = $_POST['selected_text1'];
	echo("<h2>".$source." to ".$destination."</h2>");
  }
  else if (isset($_POST['radio']) && isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']) && !empty($_POST['return_date']))
  {
  	$source = $_POST['selected_text'];
	$destination = $_POST['selected_text1'];
	echo("<h2>".$source." to ".$destination."</h2>");
  }
  
  
  }
}  
?>
</div>

<?php
if (isset($_POST['back']))
{
	header ("location:flight.php");

}

?>






 <?php
 $value = '';
 if (isset($_POST['search']) ){
    switch($_POST['radio']) {
        case "round_trip":
            $value = "round_trip";
            break;
        case "one_way":
            $value = "one_way";
            break;
      }
	  //echo $value;
 }
?>


<?php

/*//session_start();
$db = mysqli_connect('localhost', 'root','', 'booking');



if (isset($_POST['book']))
{
	 						 $flight_id1 = $_POST['fid1'];
							/* $source1 = $_POST['src1'];
							 $destination1 = $_POST['dest1'];
							
							 $depart_date1 = $_POST['dd1'];
							 $class1 = $_POST['cls1'];
							 $depart_time1= $_POST['dt1'];
							 $fare1 = $_POST['fr1'];
							 //$seat_available1 = $row['Seat Available'];*/
							 
/*$query="insert into f_book (flight_id) values ('$flight_id1')";
	mysqli_query($db,$query);
	//echo "$flight_id1";
	
	header("location:book.php");
	
}*/	
	

?>

<?php

session_start();
$link = mysqli_connect('localhost', 'root','', 'flight');



if (isset($_POST['book']))
{
	 						 $flight_id1 = $_POST['fid1'];
							 $source1 = $_POST['src1'];
							 $destination1 = $_POST['dest1'];
							
							 $depart_date1 = $_POST['dd1'];
							 $class1 = $_POST['cls1'];
							 $depart_time1= $_POST['dt1'];
							 $fare1 = $_POST['fr1'];
							 
							 $ticketno1=mt_rand(1000,9999);
							 
							 
							 
							 $totalpassengers1=$_POST['tp1'];
							 //$seat_available1 = $row['Seat Available'];
							 
							// global $fid=$flight_id1;
							 
$query="insert into fbs (ticket_no,flight_id,source,destination,depart_date,class,depart_time,fare,total_passengers) values('$ticketno1','$flight_id1','$source1','$destination1','$depart_date1','$class1','$depart_time1','$fare1','$totalpassengers1')";
	if(mysqli_query($link,$query))
	{
		header("location:book.php");
	}
}	
	





global $count;
global $count1;
$output = array();
$output1 = array();

$count=0;
$count1=0;

if (isset($_POST['search']) )
{

	$a='unchecked';
	$b='unchecked';

	
	$source = $_POST['selected_text'];
	$destination = $_POST['selected_text1'];
	$depart_date=$_POST['depart_date'];
 	$return_date=$_POST['return_date'];
	$adult=$_POST['selected_text2'];
	$children=$_POST['selected_text3'];
 	$class=$_POST['selected_text4'];
	
	$total_passengers=$adult + $children;
	
	if ($value == "one_way") 
	{
	
		$a='checked';
		//$depart_date = date('d-m-y', strtotime($depart_date)); //date format
		
		//$sql = ("SELECT flight_id,source,destination,depart_date,depart_time,class,fare FROM flight_avail WHERE source='$source' AND destination='$destination' AND depart_date='$depart_date' AND class='$class'");	
		if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']))
		{
		
				$sql = ("SELECT * FROM flight_avail_oneway where source='$source' AND destination='$destination' AND depart_date='$depart_date' AND class='$class'");	
		
				$result = mysqli_query($link,$sql);
				
				
				$count = mysqli_num_rows($result);
				
				if($count == 0) 
				{
					$output = 'There was no search results!';
				}
		
				else 
				{
					echo	 '<table id="table">
						
						<thead>
						
						<tr>
		
						<th style="padding-right:30px">Flight_Id</th>
		
						<th style="padding-right:30px">Source</th>
		
						<th style="padding-right:30px">Destination</th>
		
						<th style="padding-right:30px">Depart_date</th>
		
						<th style="padding-right:30px">Class</th>
		
						<th style="padding-right:30px">Depart_time</th>
						
						<th style="padding-right:30px">Fare</th>
						
						<th style="padding-right:30px">Seat Available</th>
						
						<th style="padding-right:30px">Total Passengers</th>
						
						<th style="padding-right:30px">Status</th>
						
						
						
						</tr>
						</thead>';
		
						
					
					while($row = mysqli_fetch_array($result))
						{
						
								
		
						
								
							/* $flight_id = $row['flight_id'];
							 $source = $row['source'];
							 $destination = $row['destination'];
							
							 $depart_date = $row['depart_date'];
							 $class = $row['class'];
							 $depart_time= $row['depart_time'];
							 $fare = $row['fare'];
							 $seat_available = $row['Seat Available'];*/
							 
							 
							 
											 
							 
							 
							 
							 
						//$time = $row['time'];
						//$dest_time = $row['dest_time'];
						
						//$output .= '<div>'.$from1.' '.$to1.' '."Rs:".' '.$fare.' '."</br>".' '.$depart_date.'</div>';
				//$output[] = $flight_Id.'."</br>".'.$source.' To '.$destination.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' Depart time: '.$depart_time.' '."</br>".' '."Class: ".' '.$class.' '."</br>".' '."Price: ".' '.$fare.' '."</br>";	
							
							 echo '<tr><form method="post"  name="flight_form">';
							 
							  
							 
							 
		 echo '<td><input type="text" size="10" name="fid1" value=" '.$row['flight_id'] .'"/></td>';
		 
	//echo '<td>'.$row['flight_id'] .'</td>';
			 
		 echo '<td><input type="text" size="15" name="src1"  value=" '.$row['source'] .'"/></td>';
		 echo '<td><input type="text" size="15" name="dest1" value=" '.$row['destination'] .'"/></td>';
		 echo '<td><input type="text" size="11"  name="dd1" value=" '.$row['depart_date'] .'"/></td>';
		 echo '<td><input type="text"  size="9" name="cls1" value=" '.$row['class'] .'"/></td>';
		 echo '<td><input type="text" size="6"  name="dt1" value=" '.$row['depart_time'] .'"/></td>';
		 echo '<td><input type="text" size="6"  name="fr1" value=" '.$row['fare'] .'"/></td>';
		 echo '<td><input type="text"  size="4" name="seat_available" value=" '.$row['Seat Available'] .'"/></td>';
		  echo '<td><input type="text" size="5"  name="tp1" value="'; echo ($total_passengers); echo '"/></td>';	
							  
							  
							 // echo '<td><input type="checkbox" name="checkbox" ></input></td>';   
							  
							  echo '<td><input type="submit" name="book" value="Book Now"/></form></td>';  
							 
							//echo '<td>booknow</td>';
							
							  echo "</tr>";
							 // echo '</form>';
				 
				
				 				
						}
				
							echo "</table>";
				}
		
		}
		
		
		
		
	}





	else if ($value = "round_trip") 
	{
	
		$b='checked';
	//$d_date ='';
	//echo $maker, $maker1;
	//echo $d_date;
	//$depart_date = date('d-m-y', strtotime($depart_date));
	//$return_date = date('d-m-y', strtotime($return_date)); //date format
	//$maker = '';
	//$maker1 = '';
	//echo $d_date;
	
	if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']) && !empty($_POST['return_date']))
	//$sql = ("SELECT flight_id,source,destination,depart_date,return_date,depart_time,return_time,class,fare FROM flight_avail WHERE source='$source' AND destination='$destination' AND depart_date='$depart_date' AND return_date='$return_date' AND class='$class'");
	
	
	{
		
				$sql = ("SELECT * FROM flight_avail where source='$source' AND destination='$destination' AND depart_date='$depart_date' AND return_date='$return_date' && class='$class'");
	
		
		$result = mysqli_query($link,$sql);
		
		
		$count = mysqli_num_rows($result);
		if($count == 0) 
		{
			$output[] = 'There was no flights while going!';
		}
		
		else 
		{
			
			echo '<table>

			<thead>
				
				<tr>
			
			<th style="padding-right:20px">Flight_Id</th>
			
			<th style="padding-right:20px">Source</th>
			
			<th style="padding-right:20px">Destination</th>
			
			<th style="padding-right:20px">Depart_date</th>
			
			<th style="padding-right:20px">Return_date</th>
			
			<th style="padding-right:20px">Depart_time</th>
			
			<th style="padding-right:20px">Return_time</th>
			
			<th style="padding-right:20px">Class</th>
			
			<th style="padding-right:20px">Fare</th>
			
			<th style="padding-right:10px">Check to Display</th>
			
				<th style="padding-right:20px">Status</th>
			
			</tr>
			</thead>';
			
			
			
			
			while($row = mysqli_fetch_array($result))
			{
			
				$flight_id = $row['flight_id'];
				$source = $row['source'];
				$destination = $row['destination'];
				
				$depart_date = $row['depart_date'];
				$return_date = $row['return_date'];
				$depart_time = $row['depart_time'];
				$return_time = $row['return_time'];
				$class = $row['class'];
				$fare = $row['fare'];
				
			//$time = $row['time'];
			//$dest_time = $row['dest_time'];
			
			//$output .= '<div>'.$from1.' '.$to1.' '."Rs:".' '.$fare.' '."</br>".' '.$depart_date.'</div>';
	//$output1[] = $flight_Id.'."</br>".'.$source.' To '.$destination.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' Return date: '.$return_date.' '."</br>".' Depart time: '.$depart_time.' '."</br>".' Return time: '.$return_time.' '."</br>".' '."Price: ".' '.$fare.' '."</br>".' '."Class: ".' '.$class.' '."</br>";	
	
		 echo '<tr style="padding-right:10px">';

		  echo "<td>" . $row['flight_id'] . "</td>";
		
		  echo "<td>" . $row['source'] . "</td>";
		
		  echo "<td>" . $row['destination'] . "</td>";
		
		  echo "<td>" . $row['depart_date'] . "</td>";
		  
		  echo "<td>" . $row['return_date'] . "</td>";
		
		  echo "<td>" . $row['depart_time'] . "</td>";
		
		  echo "<td>" . $row['return_time'] . "</td>";
		  
		  echo "<td>" . $row['class'] . "</td>";
		
		  echo "<td>" . $row['fare'] . "</td>";
		  
		  
		    echo '<td><input type="checkbox" name="checkbox" ></input></td>';   
							  
							  echo '<td><input type="submit" name="book" id="book" value="Book Now" onclick="tabcopy()"/></td>';  
							 
		  
		  // echo '<form method="post" action="book.php"><td><input type="button" name="book" id="book" value="Book Now"/></td></form>'; 
		
			 // echo '<td><a href="book.php">Book Now</a></td>';
		
		  echo "</tr>";
			
			}//while
			echo "</table>";
		}//else
			
		}// if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']) && !empty($_POST['return_date']))
		
		else if (!isset($_POST['Make']) && !isset($_POST['Make1']) && !isset($_POST['class']) && !isset($_POST['adult']) && !isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && !isset($_POST['Make1']) && !isset($_POST['class']) && !isset($_POST['adult']) && !isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && isset($_POST['Make1']) && !isset($_POST['class']) && !isset($_POST['adult']) && !isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && !isset($_POST['adult']) && !isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && !isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		else if (isset($_POST['Make']) && isset($_POST['Make1']) && isset($_POST['class']) && isset($_POST['adult']) && isset($_POST['children']) && !empty($_POST['depart_date']) && empty($_POST['return_date']))
		{
					
			echo "empty fields";
					
		}
		
			
	}//elseif
	
	
	
}//main if
	else 
	{
		echo "error";//$output[] = '';
	}	
	
	
	
	
	

		
?>





<?php


//check
/*if ($value == "round_trip"){
echo '<h3>Going flights</h3>';
$i = 0;
if ($count > 0 ) {
	while ($i < $count) {
		$output[$i];
		echo '<input type="radio" name="hi" checked="checked" value="' . $output[$i] . '" >';
	echo $output[$i];
	
	echo '</br>';
		$i = $i+1;
	}
}
else{
	echo "No going flights are available...";
}


//returning flights printing
echo '<h3>Returning flights</h3>';
$j = 0;
if ($count1 > 0 ) {
	while ($j < $count1) {
		echo '<input type="radio" name="hii" checked="checked" value="' . $output1[$j] . '" >';
	echo $output1[$j]; 
	
	echo '</br>';
		$j = $j+1;
	}
}
else{
	echo "No returning flights are available...";
}
}//closing of round_trip
else{
	echo '<h3>Going flights</h3>';
$i = 0;
if ($count > 0 ) {
	while ($i < $count) {
		$output[$i];
		echo '<input type="radio" name="hi" checked="checked" value="' . $output[$i] . '" >';
	echo $output[$i];
	
	echo '</br>';
		$i = $i+1;
	}
}
else{
	echo "No going flights are available...";
}
}
?>

<br>
<?php
if ($count1 > 0 | $count > 0) {
echo '<input type="submit" value="Continue >>"/>';
}

</form>*/
?>







<!-- Display filghts -->
<!--List reservations-->
<!--<div id="services" class="container-fluid text-center">-->
 
<!DOCTYPE HTML>
<html>
<head>
<title>Airline Department</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
		
		
		
		
     </script>
	 
	 
	 
	<!-- <script>
	 
	 
	 var index, table=document.getElementById('table');
	 for(var i=1 ;i < table.rows.length;i++)
	 {
	 
	 	table.rows[i].cells[8].onclick= function()
		{
			index=this.parentElement.rowIndex;		
			table.deleteRow(index);
		
		};
	 
	 }
	 
	 
	 </script>-->
	 
	 
	 
	 
	 
	 <!--<script>
	 
	 
	 var rindex, table=document.getElementById('table');
	 for(var i=0 ;i < table.rows.length;i++)
	 {
	 
	 	table.rows[i].onclick= function()
		{
			rindex=this.rowIndex;	
			document.getElementById("fid").value= this.cell[0].innerHTML;	
			//table.deleteRow(index);
		
		};
	 
	 }
	 
	 
	 </script>-->
	 
	 
	 
	 
	 <style>
	 th,td,tr
	 {
	 border: groove;
	
	 padding:10px 10px 10px;
	
	 }
	 
	
	 
	 th{
	 font-size: 15px;
	 border: solid;
	 border-left-width: medium;
	 border-color:#999999
	 
	 
	 }
	 tr:hover
	 {
	 	 background-color:#FF9933
	 }
	
	 </style>
	 
	 
	 
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

body {
  font-family: Georgia, "Times New Roman", Times, serif;
}



</style>
</head>
<body>
<div>
<form method="post">
<input type="submit" name="back" value="Modify Search"></input>
</form>
</div>
<!--<div>
<input type="text"  id="fid"></input>


</div>-->
</body>

</html>