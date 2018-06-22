<?php

$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'hotel_dd');

?>




<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Reservation</title>
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


#flights {
  position: inherit;
      left: 50;
  top: 50;
  width: 50%;
  height: 50%;
  background-size: cover;
      
}

#cmbMake {
    padding: 2px;
    color: #000;
    font-size: 15px;
    background-color: transparent;
    -webkit-appearance: none;
}

::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }


form {
  position: relative;
  background: rgba(130,130,130,.3);
 padding: 10px 10px;
  border: 1px solid;
}

.fwslider>.
</style>

</style>











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
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <!--<div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>-->
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/login.ico" alt=""/></li>
						  <li class="list_desc"><h4><a href="#"></a></h4><span class="actual">
                          </span></li>
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
	
	
	  
	  
	
	
	
	
	  <div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
			
			
                <!-- Slide image -->
               <img src="images/hotel.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
				
		
	
                <div class="slide_content">
                    <div class="slide_content_wrap">
				<!--	<script type="text/javascript" src="js/script.js"></script>-->
					<div id="flights">
					<h1>Hotel Booking  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  </h2>
<!--<a href="#">Ticket cancellation</a> </h2>-->
 
						<form action="hotel_available.php" method="post">
						
						
						<div>
					
							
						
						</div>
						
						<!--<p><label style="display:block" id="label0">Check-In</label>
						<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date" /></p>
						<p><label style="display:block" id="label1">Check-Out</label>
						 <input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" /></p>-->
						Select Location:&nbsp; &nbsp; &nbsp; &nbsp; 
							<select id="cmbMake" name="Make"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
							
							<?php    
							
							$res=mysqli_query($link,"select * from hotel_loc");
							while($row=mysqli_fetch_array($res))
							
							
							
							{
							
							
							
							?>
								<option>
									
									<?php
									
									echo $row["location"];
									
									?>
									
									
									
									</option>
									
							<?php 
							
							}
							
							?>		

								
									<!--<option value="1">Delhi</option>
									<option value="2">Bangalore</option>
									<option value="3">Kolkata</option>
									<option value="4">Kathmandu</option>
									<option value="5">Munich</option>
									<option value="6">Mumbai</option>
									<option value="7">New York</option>
									<option value="8">Paris</option>
									<option value="9">Milan</option>
									<option value="10">Madrid</option>
									<option value="11">Zurich</option>-->
									
									
									
									
									
							</select>
						
						
						
						
						
						<!--<div>
							<!--<select id="cmbMake" name="roomno" onChange="document.getElementById('selected_text2').value=this.options[this.selectedIndex].text">
										<option value="0" disabled="disabled" selected="selected" id="place">Room No</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										
							</select>
							</div>-->
							Select Hotel Class: &nbsp;  
							<select id="cmbMake" name="roomtype" onChange="document.getElementById('selected_text4').value=this.options[this.selectedIndex].text">
							<?php    
							
							$res=mysqli_query($link,"select * from hotel_type");
							while($row=mysqli_fetch_array($res))
							
							
							
							{
							
							
							
							?>
							
							
										<option>
										
										<?php
											
											echo $row["type"];
									
										?>
										
										
										</option>
										
								<?php 
							
							}
							
							?>			
										
								</select>
						
						
						<input type="hidden" name="selected_text" id="selected_text" value="" />
						<input type="hidden" name="selected_text1" id="selected_text1" value="" />
						<input type="hidden" name="selected_text2" id="selected_text2" value="" />
						<input type="hidden" name="selected_text3" id="selected_text3" value="" />
					
						<input type="submit" name="search" id="find" value="Check Available Hotels"/>
						</form>
						</div>
					<div id="banner">
					</div>
                        <!-- Text title -->
                       <!-- <h1 class="title" style=" color: #FFFFFF; text-align:left; font-style:italic;">Welcome to Explora</h1>-->
                        <!-- /Text title -->
                        <!--<div class="button"><a href="#">See Details</a></div>-->
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
           
			 
        </div>
		
      <!--  <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>-->
       </div>
       <!--/slider -->
      </div>
	  
	  
	 
	  
	
	   <div class="features">
		<div class="container">
			<h3 class="m_3">DESTINATIONS</h3>
			<div class="close_but">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. <br>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</div>
			  <div class="row">
			  
				
                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="switz.php">
                    <img src="images/switzerland.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Switzerland</h2>
                        <p>Actual Price:&nbsp; &nbsp; &nbsp;<strike>$15,000</strike><br>Special Offer:&nbsp; &nbsp; &nbsp;$7000</p>
                      </div>
                    </a> </div>
                   <!--<h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                   <p class="m_5">claritatem insitam</p>-->
				</div>
				
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="India.php">
                    <img src="images/india1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>India</h2>
                        <p>Actual Price:&nbsp; &nbsp; &nbsp;<strike>$15,000</strike><br>Special Offer:&nbsp; &nbsp; &nbsp;$7000</p>
                      </div>
                    </a> </div>
                  <!-- <h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                   <p class="m_5">claritatem insitam</p>-->
				</div>
				
				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="">
                    <img src="images/germany.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Germany</h2>
                        <p>Actual Price:&nbsp; &nbsp; &nbsp;<strike>$15,000</strike><br>Special Offer:&nbsp; &nbsp; &nbsp;$7000</p>
                      </div>
                     </a> </div>
                   <!--<h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                   <p class="m_5">claritatem insitam</p>-->
				</div>
				
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="Spain.php">
                    <img src="images/spain.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Spain</h2>
                        <p>Actual Price:&nbsp; &nbsp; &nbsp;<strike>$15,000</strike><br>Special Offer:&nbsp; &nbsp; &nbsp;$7000</p>
                      </div>
                   </a> </div>
				   </div>
                  <!--<h4 class="m_4"><a href="#">nostrud exerci ullamcorper</a></h4>
                  <p class="m_5">claritatem insitam</p>-->
                </div>
				
				
				</div>
			 </div>
			 <h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  </h2>
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
