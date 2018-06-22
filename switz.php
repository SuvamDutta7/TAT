<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Switzerland</title>
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
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
				
				 <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

body {
  font-family: Georgia, "Times New Roman", Times, serif;
}
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
								<li><a href="hotel.php">Package</a></li>
								<li><a href="hotel.php">Contact</a></li>									
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
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/f1.jpg" />
									<img class="etalage_source_image" src="images/f1.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/f1.jpg" />
								<img class="etalage_source_image" src="images/f1.jpg" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3>About </h3>
				        	<p class="m_10"><font style="font-size:large">Switzerland</font> is a mountainous Central European country, home to numerous lakes, villages and the high peaks of the Alps. Its cities contain medieval quarters, with landmarks like capital Bern’s Zytglogge clock tower and Lucerne’s wooden chapel bridge. The country is also known for its ski resorts and hiking trails. Banking and finance are key industries, and Swiss watches and chocolate are world renowned.
Dialing code: +41
Currency: Swiss franc
Date format: dd.mm.yyyy (AD)
Points of interest: Rhine Falls, Lake Geneva, Lake Constance, MORE
Official languages: German, French, Romansh, Italian</p>
				        	<ul class="exclusive">
								<h4 class="m_12">Available Rooms</h4>
								<li>Single Bed</li>
								<li>Double Bed</li>
								<li>Suite</li>
								
							</ul><br>	
				        	<!--<ul class="product-colors">
								<h3>available Colors</h3>
								<li><a class="color1" href="#"><span> </span></a></li>
								<li><a class="color2" href="#"><span> </span></a></li>
								<li><a class="color3" href="#"><span> </span></a></li>
								<li><a class="color4" href="#"><span> </span></a></li>
								<li><a class="color5" href="#"><span> </span></a></li>
								<li><a class="color6" href="#"><span> </span></a></li>
								<div class="clear"> </div>
							</ul>-->
							<div class="btn_form">
							   <form>
								 <input type="submit" value="book now" title="">
							  </form>
							</div>
							<!--<ul class="add-to-links">
    			              <li><img src="images/wish.png" alt=""><a href="#">Add to Wishlist</a></li>
    			            </ul>-->
							<div class="social_buttons">
							<!--	<h4>95 Items</h4>-->
								<button type="button" class="btn1 btn1-default1 btn1-twitter" onClick="">
					              <i class="icon-twitter"></i> Tweet
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-facebook" onClick="">
					              <i class="icon-facebook"></i> Share
					            </button>
					             <button type="button" class="btn1 btn1-default1 btn1-google" onClick="">
					              <i class="icon-google"></i> Google+
					            </button>
					            <button type="button" class="btn1 btn1-default1 btn1-pinterest" onClick="">
					              <i class="icon-pinterest"></i> Pinterest
					            </button>
					        </div>
				        </div>
				        <div class="clear"> </div>
				</div>
				<!--<div class="col-md-3">
				  <div class="box-info-product">
					<p class="Discount"></p>
					       <ul class="prosuct-qty">
								<span>Single Bed</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Book</span>
							</button>
				   </div>
			   </div>
			   
			   <div class="col-md-3">
				  <div class="box-info-product">
					<p class="Discount"></p>
					       <ul class="prosuct-qty">
								<span>Double Bed</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Book</span>
							</button>
				   </div>
			   </div>
			   
			   
			     <div class="col-md-3">
				  <div class="box-info-product">
					<p class="Discount"></p>
					       <ul class="prosuct-qty">
								<span>Suite</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</ul>
							<button type="submit" name="Submit" class="exclusive">
							   <span>Book</span>
							</button>
				   </div>
			   </div>-->
			   
			   
			</div>	
			<div class="desc">
			   	<h4>Description</h4>
			   	<p><font style="font-size: large">Switzerland</font> is a mountainous Central European country, home to numerous lakes, villages and the high peaks of the Alps. Its cities contain medieval quarters, with landmarks like capital Bern’s Zytglogge clock tower and Lucerne’s wooden chapel bridge. The country is also known for its ski resorts and hiking trails. Banking and finance are key industries, and Swiss watches and chocolate are world renowned.
Dialing code: +41
Currency: Swiss franc
Date format: dd.mm.yyyy (AD)
Points of interest: Rhine Falls, Lake Geneva, Lake Constance, MORE
Official languages: German, French, Romansh, Italian</p>
			</div>
			<div class="row">
				<h4 class="m_11">Places to visit</h4>
				<div class="col-md-4 product1">
					<img src="images/f2.jpg" class="img-responsive" alt=""/> 
					<div class="shop_desc"><a href="single.html">
						</a><h3><a href="single.html"></a><a href="#">Zurich</a></h3>
						<p>Zurich </p>
						<span class="reducedfrom"></span>
						<span class="actual"></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Book Now</a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
				<div class="col-md-4 product1">
					<img src="images/f3.jpg" class="img-responsive" alt=""/> 
					<div class="shop_desc"><a href="single.html">
						</a><h3><a href="single.html"></a><a href="#">Basel</a></h3>
						<p>Basel </p>
						<span class="reducedfrom"></span>
						<span class="actual"></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Book Now</a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
				<div class="col-md-4">
					<img src="images/f4.jpg" class="img-responsive" alt=""/> 
					<div class="shop_desc"><a href="single.html">
						</a><h3><a href="single.html"></a><a href="#">Geneva</a></h3>
						<p>Geneva </p>
						<span class="reducedfrom"></span>
						<span class="actual"></span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Book Now</a></li>
							<li class="shop_btn"><a href="#">Read More</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</div>
			</div>	
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
			           <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
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