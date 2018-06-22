<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if (isset($_POST['back']))
{
	header ("location:flight.php");

}

?>


<?php 
//session_start();
$db=mysqli_connect('localhost','root','','booking');

$errors= array();


if(isset($_POST['register']))
{

	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$add= $_POST['add'];
	$email= $_POST['email'];
	$contact= $_POST['contact'];
	$visa= $_POST['visa'];
	$passport= $_POST['passport'];
	$password= $_POST['password'];
	
	$ticketno= (mt_rand(10000,99999));
	
	
	
	//password = md5($password); //encryption
	$sql="insert into f_book(fname,lname,address,email,contact,visa_no,passport_no,ticket no,password) values('$fname','$lname','$add','$email','$contact','$visa','$passport','$ticketno','$password')";
	mysqli_query($db,$sql);
	//$ticketno=mt_rand(10000,99999);

	header("location:index.php");			
	

}




?>



<?php

session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Flight Booking</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
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
	 
	 
	
	 
	 <!--<script>

  function tabtotab()
  {
    
    var table1= document.getElementById("table1");
	var table2= document.getElementById("table2");
	var btn= document.getElementById("booknow");
	for (var i=0;i<btn.length;i++)
	{
				
	}
      
 
  }

</script>-->
	 
	 
	 
	 
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

body {
  font-family: Georgia, "Times New Roman", Times, serif;
}



form input, form button  {
 border: 2px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 10px 10px 10px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  
 
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 15px;
 
}
#divshow{
display:block;}

</style>

<!--<script>

function togglediv()
{
document.getElementById("divshow").style.display='none';
}


</script>-->	 
</head>


<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="flight.php">Flight</a></li>
						    	<li><a href="rail.php">Rail</a></li>
								<li><a href="hotel.php">Hotel</a></li>
								<li><a href="package.php">Package</a></li>
								<li><a href="package.php">Contact</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				   <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				     <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/login.ico" alt=""/></li>
						  <li class="list_desc"><h4><a href="#"></a></h4><span class="actual"></span></li>
						  <div class="login_buttons">
							 <!--<div class="check_button"><a href="checkout.html">Check out</a></div>-->
							 <div class="login_button"><a href="login.php">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
	  
	  
	 
	  
	  
	  
	  
     <div class="main" style="background-image:url(images/flight_r.jpg)">
       
	  <div class="shop_top">
	  
	 <!-- <div class="close_but" style="border:double"><h2>Flight Information</h2><br><table id="table2" border="1">
						
						<thead>
						
						<tr>
		
						<th style="padding-right:30px">Flight_Id</th>
		
						<th style="padding-right:30px">Source</th>
		
						<th style="padding-right:30px">Destination</th>
		
						<th style="padding-right:30px">Depart_date</th>
		
						<th style="padding-right:30px">Class</th>
		
						<th style="padding-right:30px">Depart_time</th>
						
						<th style="padding-right:30px">Fare</th>
						
						
						
						</tr>
						</thead>
						<td><?php   ?></td>
						<td><?php ?></td>
						<td><?php ?></td>
						<td><?php  ?></td>
						<td><?php  ?></td>
						<td><?php  ?></td>
						<td><?php  ?></td>
										 
				</table>
</div>-->
	  
	 
	  
	  
	     <div class="container">
						<form action="book.php" name="form" method="post"> 
								<div class="register-top-grid">
										<h2 align="center">PASSENGER DETAILS</h2><br /><br />
										<div>
											<span style="color:#000000">First Name<label>*</label></span>
											<input type="text" placeholder="Enter First Name" name="fname"> 
										</div>
										<div>
											<span style="color:#000000">Last Name<label>*</label></span>
											<input type="text" placeholder="Enter Last Name" name="lname"> 
										</div>
										<div>
											<span style="color:#000000">Address<label>*</label></span>
											<input type="text" placeholder="Enter Address" name="add"> 
										</div>
										<div>
											<span style="color:#000000">Email<label>*</label></span>
											<input type="text" placeholder="Enter Email" name="email"> 
										</div>
										<div>
											<span style="color:#000000">Contact No<label>*</label></span>
											<input type="text" placeholder="Enter Contact No" name="contact"> 
										</div>
										<div>
											<span style="color:#000000">Visa No<label>*</label></span>
											<input type="text" placeholder="Enter Visa No" name="visa"> 
										</div>
										<div>
											<span style="color:#000000">Passport No<label>*</label></span>
											<input type="text" placeholder="Enter Passport No" name="passport"> 
										</div>
										<div>
											<span style="color:#000000">Password<label>*</label></span>
											<input type="text" placeholder="**********" name="password"> 
										</div>
										
									
										
										<!--<div>
											<span>Passport No<label>*</label></span>
											<input type="text" placeholder="Enter Passport No" name="passport"> 
										</div>-->
										
										<!--<div class="clear"> <label class="checkbox"><input type="checkbox" name="checkbox" value="terms"><i> </i>I agree the Terms and Conditions</label> 
											</div>-->
											
												
										<!--<div class="clear"> </div>-->
								</div><br />
								
								
								<div class="clear"><input type="submit" value="Continue" name="register">  &nbsp;&nbsp;&nbsp;
								<input type="submit" value="Modify Search" name="back"> 
								
								</div>
								
								<!--<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										
										
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>-->
								<label style="color:#FF0000">*Mandatory Fields</label>
						</form>
					</div>
		   </div>
	  </div>
	
	
	
	
	
	
	<div class="footer">
			<div class="container">
				<!--<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="#">Mens</a></li>
							<li><a href="#">Womens</a></li>
							<li><a href="#">Youth</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponserships</a></li>
							<li><a href="#">team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           
		            </div>
					  <dl id="sample" class="dropdown">
				        <!--<dt><a href="#">Location:Kolkata</a></dt>-->
				        <!--<dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>-->
				
				<div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="">
                            </a>
							<p style="color:#FFFFFF">EXPLORA</p>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>
                            	
                                <br><br><br>Copyright &copy; 2014 <a href="#">Company Name</a>
                            
                            
                            <!--
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
				
				
			</div>
		</div>
	
	
</body>	
</html>