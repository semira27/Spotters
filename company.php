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



        



        <title>Spotters Australia | Company</title>



        <meta name="description" content="Our job is to help your job run smoothly. With more than 15 years’ experience, you can trust us to get the tough jobs done with the utmost safety, professionalism and peace of mind – on time, every time">



        <meta name="google-site-verification" content="Pq5VQDWEqixiCnXfkhSUtl_9dsx5wlFqAyATgT3BtMQ" />



		<meta name="revisit-after" content="1 month">



	    <link rel="canonical" href="/">







        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,300,700,800' rel='stylesheet' type='text/css'>







         <!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->



        <link rel="icon" href="img/favicon.ico">



        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">







        



        <link rel="stylesheet" href="css/flexslider.css" type="text/css">



        <link rel="stylesheet" href="css/jquery.selectbox.css" type="text/css">



        



        <link rel="stylesheet" href="css/reset.css" type="text/css">



        <link rel="stylesheet" href="css/css3.css" type="text/css">



        



        



        <link rel="stylesheet" href="css/general.css" type="text/css">



        <link rel="stylesheet" href="css/animate.css" type="text/css">



        <style>



          



        </style>











    </head>



    <body>



        <!--[if lt IE 7]>



            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>



        <![endif]-->      



                      <div id="overlay-login" class="overlay" style="display: none;">



            <div class="login-wrapper">



                <div id="close-login" class="close"><a></a></div>



                <form class="login-content" action="cms/process.php" method="POST">



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



                <form class="login-content" action="cms/process.php" method="POST">


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



            <img src="img/logo-background.png" />



            <div class="head-container">



                <a href="index.php"><img id="logo" src="img/logo.png" /></a>



                <ul class="top-nav">



                    <li><a href="index.php">Home</a></li>



                    <li class="active"><a href="company.php">Company</a></li>



                    <li><a href="contact.php">Contact us</a></li>



                    <li><a id="red" href="#">Log in</a></li>



                </ul>



            </div>



        </div>







        <div class="header">



            <div class="bottom-nav-bg"></div>



            <div class="after-head-top">



                <ul class="bottom-nav">



                    <li><a href="electrical.php">ELECTRICAL SPOTTERS</a></li>



                    <li><a href="cranehire.php">CRANE HIRE</a></li>



                    <li><a href="traffic.php">TRAFFIC MANAGEMENT</a></li>



                </ul>



            </div>



            <!-- added //-->



            <div class="after-head-banner">



                <div id="after-head-detail-container" class="container">



                    <div class="after-head-detail">







                        <div id="left-side-add">&nbsp;</div> <!-- added //-->







                        <ul>



                            <li>



                                <h1>Established in 2000</h1>



                                <h2>with more then 15 years experience... <a href="company.php">Find out more</a></h2>



                            </li>



                            <li>



                                <h4 id="logo" href="#"></h4>



                                <h3>VicRoads approved company</h3>



                            </li>



                            <li>



                                <h5>0418 399 710</h5>



                                <h6>For all enquiries</h6>



                            </li>



                        </ul>



                    </div>



                    



                </div>



                <div id="right-side-add">&nbsp;</div> <!-- added //-->



               



            </div>



            <div class="full">



                <div id="afterHead" class="container">



                    <hr />



                </div>



            </div>



            



            



            



        </div>







        <div class="full">



            <div class="container">



                <div id="company-details" class="details">



                    <h1>Our job is to help your job  <small>run smoothly.</small></h1>



                    <h2>Spotters Australia is a labour hire company offering a suite of services to the construction industry. </h2>



                </div>



            </div>



        </div>



        



        



       <div id="company-banner2" class="full">



           <img src="images/company-banner22.jpg" />



           <div class="container">



               <h1>With more than 15 years’ experience, you can trust us to get the tough jobs done with the utmost safety, professionalism and peace of mind – on time, every time.</h1>



           </div>



       </div>







        <div id="company-details2" class="details2 full">



            <div class="container">



                <h1>We specialise in spotting, dogman, traffic management  and crane hire.</h1>



                <ul>



                    <li><h2>With our diverse range of services, coordinating subcontractors is easier because Spotters Australia can do more. And while we’re a cut above the competition when it comes to service, you’ll find our rates are often priced below. </h2></li>



                    <li><h2>Our experience and talent pool of quality operators means we’re well placed to help you see every job through to successful completion.</h2></li>



                </ul>



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



            var picture = $('.after-head-banner').backstretch("images/company-banner.jpg", { duration: 8000, fade: 750 });











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







                $(document).keyup(function (e) {



                    if (e.keyCode == 27 &&  $("#overlay-login").css("display") != "none") {



                        event.preventDefault();



                       $("#overlay-login").fadeToggle("fast");



                    }



                });


 				$("#okBtn").click(function () {

					 $("#overlay-pass").fadeOut(300);
					return false;
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

       			      url:"cms/process.php",

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



