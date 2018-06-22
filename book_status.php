<div class="jumbotron text-center">
<?php
echo("<h2>Booking Status</h2>");
?>
</div>





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
border:dotted;
  position: inherit;
  vertical-align:middle;
      left: 50;
  top: 10;
  width: 15%;
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
 padding: 50px 10px;
  border: 1px solid;
}

.fwslider>.
</style>



</head>

<body onLoad="this.form.reset();">




<div id="flights">
<form action="flight_available.php" method="post" name="form">
<p><label style="display:block" id="label">Ticket Number:</label>
						<input type="text" name="ticket"  id="ticket" placeholder="Ticket Number" /></p>
						<p><label style="display:block" id="label2">Passport Number:</label>
						 <input type="text" name="passport"  id="passport" placeholder="Passport Number" /></p>
<input type="submit" name="login" id="login" value="
Continue"/>

</form>
</div>
</body>
</html>
