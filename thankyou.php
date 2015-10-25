<?php 



include("include/session.php");



?>







<!DOCTYPE html>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->



<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->



<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->



<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->



    <head>



        <meta charset="utf-8">



        



        <title>Thank you | Spotters Australia</title>



       <meta name="google-site-verification" content="Pq5VQDWEqixiCnXfkhSUtl_9dsx5wlFqAyATgT3BtMQ" />



        <meta name="description" content="">



		<meta name="revisit-after" content="1 month">



	    <link rel="canonical" href="/">



        



         <!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->



        <link rel="icon" href="img/favicon.ico">



        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">







                <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,300,700,800' rel='stylesheet' type='text/css'>



        <link rel="stylesheet" href="css/flexslider.css" type="text/css">



        <link rel="stylesheet" href="css/jquery.selectbox.css" type="text/css">



        



        <link rel="stylesheet" href="css/reset.css" type="text/css">



        <link rel="stylesheet" href="css/css3.css" type="text/css">



        



        



        <link rel="stylesheet" href="css/general.css" type="text/css">



        <link rel="stylesheet" href="css/animate.css" type="text/css">







        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>



        <script>



            function initialize() {



                var map_canvas = document.getElementById('map-canvas');



                var map_options = {



                    center: new google.maps.LatLng(-37.888415, 144.758386),



                    zoom: 16,



                    scrollwheel: false,



                    navigationControl: false,



                    mapTypeControl: false,



                    scaleControl: false,



                    draggable: true,



                    zoomControl: false,



                    streetViewControl: false,



                    panControl: false,



                    mapTypeControl: false,



                    overviewMapControl: false,



                    mapTypeId: google.maps.MapTypeId.ROADMAP



                }



                var map = new google.maps.Map(map_canvas, map_options)



                //custom map marker image



                var marker = new google.maps.Marker({



                    position: new google.maps.LatLng(-37.890271, 144.756114),



                    map: map,



                    title: 'Spotters Australia',



                    icon: 'img/location.png'



                });







                // Create an InfoWindow for the marker



                var contentString = '<div style="line-height:1.35;overflow:hidden;white-space:nowrap;"><h1 style="font-size: 18px; font-weight: 700; padding-bottom: 7px;">Contact</h1> <p style="padding-bottom: 10px;"><strong style="font-weight: 700">Address:</strong><br>255 Point Cook Road, <br>Point Cook. 3030</p><p><strong style="font-weight: 700">Email:</strong><br><a href="mailto:info@spottersau.com.au" style="color: #000;">info@spottersau.com.au</a></p></div>';	// HTML text to display in the InfoWindow



                var infowindow = new google.maps.InfoWindow({ content: contentString, maxWidth: 200 });







                // Set event to display the InfoWindow anchored to the marker when the marker is clicked.



                google.maps.event.addListener(marker, 'click', function () { infowindow.open(map, marker); });



            }











            google.maps.event.addDomListener(window, 'load', initialize);



        </script>







    </head>



                       <body>



                           <!--[if lt IE 7]>



        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>



    <![endif]-->



                                        <div id="overlay-login" class="overlay" style="display: none;">



            <div class="login-wrapper">



                <div id="close-login" class="close"><a></a></div>



                <form class="login-content" action="cms/" method="POST">



                    <h1>Log in</h1>



                    <fieldset>



                        <label class="error"> <?php echo $form->error("user"); ?></label>



                        <input type="text" id="username" class="first" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>" placeholder="Email" />



                    </fieldset>



                    <fieldset>



                        <label class="error"> <?php echo $form->error("pass"); ?></label>



                        <input type="password" id="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>" class="second" placeholder="Password" />



                    </fieldset>



                    <input type="hidden" name="remember" value="0" />



                    <input type="hidden" name="sublogin" value="1" />



                    <input id="login" class="submit" type="submit" value="login" />



                    <a id="forgot-pass">Forgot your password?</a>



                </form>



            </div>



        </div> 


 <div id="overlay-pass" class="overlay" style="display:none">



            <div id="pass-wrapper" class="login-wrapper">



                <div id="close-forgot" class="close"><a></a></div>



                <form class="login-content" action="" method="POST">


				 <div id="mail-info" style="display:none">
                <h2>A new password has been sent to your supplied email address.</h2>
                <input id="okBtn" class="submit" type="submit" value="OK" />
                </div>
                <div id="mail-content">
                    <h1>Forgot your password</h1>
                <fieldset>
             		   <label id="err-forgot" class="error"><?php echo $form->error("err-forgot"); ?></label>
                        <input type="text" id="email-forgot" name="email-forgot" class="first" placeholder="Email" />

                    </fieldset>

 					<input type="hidden" name="forgotpass" value="1" />

                    <input id="submit-forgot" class="submit" type="submit" value="send" />
				</div>
                
                </form>



            </div>



        </div> 
        
                           <div id="company-head" class="head full">



                               <img src="img/logo-background2.png" />



                               <div class="head-container">



                                   <a href="index.php"><img id="logo" src="img/logo.png" /></a>



                                   <ul class="top-nav">



                                       <li><a href="index.php">Home</a></li>



                                       <li><a href="company.php">Company</a></li>



                                       <li><a href="contact.php">Contact us</a></li>



                                       <li><a id="red" href="#">Log in</a></li>



                                   </ul>



                               </div>



                           </div>



                            <div id="map">



            <div id="map-canvas"></div>



        </div>



        <div class="header headerfix">



            <div id="fix-bottom" class="bottom-nav-bg"></div>



            <div id="fix-after" class="after-head-top">



                <ul id="nav-fix" class="bottom-nav">



                    <li><a href="electrical.php">ELECTRICAL SPOTTERS</a></li>



                    <li><a href="cranehire.php">CRANE HIRE</a></li>



                    <li><a href="traffic.php">TRAFFIC MANAGEMENT</a></li>



                </ul>



            </div>



            <!-- added //-->



         <div id="afterheadbanner-fix" class="after-head-banner">



                <div id="after-head-detail-container" class="container containerfix">



                    <div class="after-head-detail">







                        <div id="left-side-add">&nbsp;</div> <!-- added //-->







                    </div>



                </div>







                <div id="right-side-add" class="rightZ rightfix">&nbsp;</div> <!-- added //-->







            </div>



        </div>



                           <div class="full">



                               <div class="container">



                                   <div id="contact-details" class="details">



                                       <h1>Thank you for submitting your enquiry.</h1>



                                       <h2>We will get back to you shortly. For any urgent matters please contact our operations manager Ray on 0418 399 710.</h2>



                                       <h2 id="team">Spotters Australia Team</h2>



                                   </div>



                               </div>



                           </div>











                <div class="footer full">



            <ul>



                <li><a href="index.php">Home</a></li>



                <li><a href="company.php">Company</a></li>



                <li><a href="electrical.php">Electrical Spotters</a></li>



                <li><a href="cranehire.php">Crane Hire</a></li>



                <li><a href="traffic.php">Traffic Management</a></li>



                <li><a href="contact.php">Contact us</a></li>



                <li><a id="loginfooter" href="#">Log in</a></li>



                <li>Web Design Melbourne - <a href="http://www.digitalpieces.com.au/" target="_blank">Digital Pieces</a></li>



            </ul>



        </div>











                           <div id="footer2" class="footer full">



                               <ul>



                                   <li><a>&copy; 2015 Spotters Australia</a></li>



                                   <li><a href="privacy.php">Privacy Policy</a></li>



                                   <li></li>



                               </ul>



                           </div>







                           <script src="js/jquery-1.7.2.min.js"></script>



                           <script src="js/backstretch.min.js"></script>



                           <script src="js/easing.js"></script>



                           <script type="text/javascript" src="js/inview.js"></script>



















                           <script>







                                        $(document).ready(function () {



                $("#red").click(function (event) {



                    event.preventDefault();



                    $("#overlay-login").fadeToggle("fast");



                });



				



				  $("#loginfooter").click(function (event) {



                    event.preventDefault();



                    $("#overlay-login").fadeToggle("fast");



                });











                $("#loginbtn").click(function (event) {



                    event.preventDefault();



                    $("#overlay-login").fadeToggle("fast");



                });







                $("#close-login").click(function () {



                    $("#overlay-login").fadeToggle("fast");



                });



				



				   $("#close-forgot").click(function () {



					 $("#overlay-pass").fadeOut(300);



                });



				$("#okBtn").click(function () {

					 $("#overlay-pass").fadeOut(300);
					return false;
                });



                $(document).keyup(function (e) {



                    if (e.keyCode == 27 &&  $("#overlay-login").css("display") != "none") {



                        event.preventDefault();



                       $("#overlay-login").fadeToggle("fast");



                    }



                });



				



				  $("#forgot-pass").click(function (event) {



                    event.preventDefault();



                    $("#overlay-pass").fadeIn(300);



                });

            });
			
							 $("#submit-forgot").click(function () {
						 
						 
			 function IsEmail(email) {
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				return regex.test(email);
			 };
			 
					if(!IsEmail($('#email-forgot').val()) || $('#email-forgot').val() == "") 
					{
						$('#err-forgot').text("* Please enter valid email address");
						return false;
					}
					else {
						
					var forgotpass = 1;
					var email = $('#email-forgot').val();

					  $.ajax({

      				  type:'POST',

       			      url:"",

     				  data:'email-forgot='+email + '&forgotpass='+forgotpass,

     			      success:function(data) {
							$("#mail-content").fadeOut(300);
 						    $("#mail-info").delay(300).fadeIn(500);   }

   				});
				return false;
				}
				
				
				

                });







                           </script>



                           



                           <script>



  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){



  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),



  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)



  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');







  ga('create', 'UA-64474259-1', 'auto');



  ga('send', 'pageview');







</script>











                       </body>



</html>



