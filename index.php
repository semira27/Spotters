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



        



        <title>Spotters Australia | Spotters Melbourne</title>



        <meta name="description" content="Spotters Australia is a labour hire company offering a suite of services to the construction industry. We specialise in spotting, dogman, traffic management and crane hire.">



        <meta name="google-site-verification" content="Pq5VQDWEqixiCnXfkhSUtl_9dsx5wlFqAyATgT3BtMQ" />



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



                    <li class="active"><a href="index.php">Home</a></li>



                    <li><a href="company.php">Company</a></li>



                    <li><a href="contact.php">Contact us</a></li>



                    <li><a id="red" href"#">Log in</a></li>



                </ul>



            </div>



        </div>







        <div class="full">



            <div class="bottom-nav-bg2"></div>



            <div class="after-head-top">



                <ul class="bottom-nav">



                    <li><a href="electrical.php">ELECTRICAL SPOTTERS</a></li>



                    <li><a href="cranehire.php">CRANE HIRE</a></li>



                    <li><a href="traffic.php">TRAFFIC MANAGEMENT</a></li>



                </ul>



            </div>



            <br style="clear:both" />



            <div id="home-banner" class="after-head-banner bgPicture">



                <div id="nav-right" class="scale">



                <div class="labels">



                    <h1 id="scale1" class="active">01</h1>



                    <h1 id="scale2">02</h1>



                    <h1 id="scale3">03</h1>



                </div>



                <img src="img/scale.png" />



            </div>



            <div id="arrowRight" class="arrowRight"></div>



            <div id="arrowLeft" class="arrowLeft"></div>



                <div id="home-container">



                    <div class="image-over">



                        <img id="image-over" src="images/guy.png">



                    </div>



                    <div class="text">



                    <div id="right1">



                        <small id="orange-quote">Electrical Spotters</small>



                        <h1 id="banner-quote">Your workers are worth the best. </h1>



                    </div>



                    <br />







                    <div id="right3">



                        <a id="findLink" href="electrical.php" class="btn">find out more</a>



                    </div>



                </div>



                </div>



                <div id="firstBanner" class="home-banner2"></div>



                <div id="secondBanner" class="home-banner2"></div>



            </div>



           



           



        </div>







        



        <div class="banner-footer">



            <div class="banner-footer-detail">



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



                        <h5>Documents & Compliances</h5>



                        <a id="loginbtn" href"#">LOG IN</a>



                    </li>



                </ul>



            </div>







        </div>



    



      



            



        <div class="footer ">



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











        <div id="footer2" class="footer">



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



			var slika = 1;



            $(document).ready(function () {



				$('.text').css('opacity', '0');



				$('.image-over').css('opacity', '0');



				



				      $('.image-over').each(function () {



                        var $this = $(this);



                        setTimeout(function () {



                            $this.addClass('animated fadeIn');



                        }, 300);



                    });



                    $('.text').each(function () {



                        var $this = $(this);



                        setTimeout(function () {



                            $this.addClass('animated fadeInDown');



                        }, 1200);



                    });



				



                $('#arrowRight').click(function () {



					if(slika == 3) 



					{



						slika = 1;



					}



					else



					{



					slika = slika + 1;



					}



					



					 if (slika == 1) {



                    $("#scale1").addClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").removeClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');



                    $("#findLink").attr("href", "electrical.php");



					



					$('#right1').css('height', '120px');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



					



                    $('#orange-quote').text("ELECTRICAL SPOTTERS.");



                        $('.image-over').css('right', 'auto');



                        $('.image-over').css('left', '0');



						$('.image-over').css('top', 'auto');



						$('#image-over').css('width', 'auto');



						$('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



                    $('#banner-quote').text("Your workers are worth the best.");



                    $('#banner-quote').css('width', '450px');



                    $('#banner-quote').css('color', '#fff');



                    $("#image-over").attr("src", "images/guy.png");



					



					$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner1.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                    }



					



                    if (slika == 2)



                    {



                        $("#scale1").removeClass('active');



                        $("#scale3").removeClass('active');



                        $("#scale2").addClass('active');



						



                        $('.image-over').css('opacity', '0');



                        $(".image-over").removeClass('animated fadeIn');



                        $(".text").removeClass('animated fadeInDown');



                        $('.text').css('opacity', '0');



						



						$('#right1').css('height', '120px');







                        $("#findLink").attr("href", "cranehire.php");



					      $('.image-over').css('right', '27px');



                        $('.image-over').css('left', 'auto');



						$('.image-over').css('top', '-10px');



						$('#image-over').css('width', '620px');



						$('#image-over').css('height', '657px');



                        $('.text').css('right', 'auto');



						



						$('#orange-quote').css('float', 'left');



						$('#orange-quote').css('text-align', 'left');



						$('#banner-quote').css('text-align', 'left');



						$('#banner-quote').css('float', 'left');



						$('#findLink').css('float', 'left');



					



                        $('#orange-quote').text("crane hire.");



                        $('#banner-quote').text("with our range, sky is the limit.");



                        $('#banner-quote').css('width', '400px');



                        $('#banner-quote').css('color', '#000');



                        $("#image-over").attr("src", "images/crane2.png");



						



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner2.jpg) center top');



								$('#firstBanner').fadeIn('slow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1200);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 1900);



                        });







                    }



                    if (slika == 3)



                    {



                    $("#scale1").removeClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").addClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');



					



					$('#right1').css('height', '160px');







                    $("#findLink").attr("href", "traffic.php");



                     $('.image-over').css('right', 'auto');



                     $('.image-over').css('left', '0');



					 $('.image-over').css('top', 'auto');



					 $('#image-over').css('width', 'auto');



					 $('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



					



                    $('#orange-quote').text("TRAFFIC MANAGEMENT.");



                    $('#banner-quote').text("We’ve had the green light from Australia’s biggest companies.");



                    $('#banner-quote').css('color', '#fff');



                    $('#banner-quote').css('width', '500px');



                    $("#image-over").attr("src", "images/guy3.png");



					



						$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner3.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                    }



                   



                });







                $('#arrowLeft').click(function () {



                    if(slika == 1) 



					{



						slika = 3;



					}



					else



					{



					slika = slika - 1;



					}



                    if (slika == 1) {



                    $("#scale1").addClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").removeClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');



                    $("#findLink").attr("href", "electrical.php");



					



					$('#right1').css('height', '120px');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



					



                    $('#orange-quote').text("ELECTRICAL SPOTTERS.");



                        $('.image-over').css('right', 'auto');



                        $('.image-over').css('left', '0');



						$('.image-over').css('top', 'auto');



						$('#image-over').css('width', 'auto');



						$('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



                    $('#banner-quote').text("Your workers are worth the best.");



                    $('#banner-quote').css('width', '450px');



                    $('#banner-quote').css('color', '#fff');



                    $("#image-over").attr("src", "images/guy.png");



					



					$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner1.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                    }



                    if (slika == 2) {



                        $("#scale1").removeClass('active');



                        $("#scale3").removeClass('active');



                        $("#scale2").addClass('active');



						



                        $('.image-over').css('opacity', '0');



                        $(".image-over").removeClass('animated fadeIn');



                        $(".text").removeClass('animated fadeInDown');



                        $('.text').css('opacity', '0');



						



						$('#right1').css('height', '120px');







                        $("#findLink").attr("href", "cranehire.php");



                             $('.image-over').css('right', '27px');



                        $('.image-over').css('left', 'auto');



						$('.image-over').css('top', '-10px');



						$('#image-over').css('width', '620px');



						$('#image-over').css('height', '657px');



                        $('.text').css('right', 'auto');



						



						$('#orange-quote').css('float', 'left');



						$('#orange-quote').css('text-align', 'left');



						$('#banner-quote').css('text-align', 'left');



						$('#banner-quote').css('float', 'left');



						$('#findLink').css('float', 'left');



						



                        $('#orange-quote').text("crane hire.");



                        $('#banner-quote').text("with our range, sky is the limit.");



                        $('#banner-quote').css('width', '400px');



                        $('#banner-quote').css('color', '#000');



                        $("#image-over").attr("src", "images/crane2.png");



						



						$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner2.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



                    }



					



					 if (slika == 3)



                    {



                    $("#scale1").removeClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").addClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');



					



					$('#right1').css('height', '160px');







                    $("#findLink").attr("href", "traffic.php");



					 $('.image-over').css('right', 'auto');



                     $('.image-over').css('left', '0');



					 $('.image-over').css('top', 'auto');



					 $('#image-over').css('width', 'auto');



					 $('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



					



                    $('#orange-quote').text("TRAFFIC MANAGEMENT.");



                    $('#banner-quote').text("We’ve had the green light from Australia’s biggest companies.");



                    $('#banner-quote').css('color', '#fff');



                    $('#banner-quote').css('width', '500px');



                    $("#image-over").attr("src", "images/guy3.png");



					



						$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner3.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                    }



                });







            });



			



				$('#scale1').click(function () {



					slika=1;



                    $("#scale1").addClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").removeClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');



                    $("#findLink").attr("href", "electrical.php");



					



					$('#right1').css('height', '120px');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



					



                    $('#orange-quote').text("ELECTRICAL SPOTTERS.");



                        $('.image-over').css('right', 'auto');



                        $('.image-over').css('left', '0');



						$('.image-over').css('top', 'auto');



						$('#image-over').css('width', 'auto');



						$('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



                    $('#banner-quote').text("Your workers are worth the best.");



                    $('#banner-quote').css('width', '450px');



                    $('#banner-quote').css('color', '#fff');



                    $("#image-over").attr("src", "images/guy.png");



					



				$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner1.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                });







                $('#scale2').click(function () {



						slika=2;



                        $("#scale1").removeClass('active');



                        $("#scale3").removeClass('active');



                        $("#scale2").addClass('active');



						



                        $('.image-over').css('opacity', '0');



                        $(".image-over").removeClass('animated fadeIn');



                        $(".text").removeClass('animated fadeInDown');



                        $('.text').css('opacity', '0');



						



						$('#right1').css('height', '120px');







                        $("#findLink").attr("href", "cranehire.php");



                        $('.image-over').css('right', '27px');



                        $('.image-over').css('left', 'auto');



						$('.image-over').css('top', '-10px');



						$('#image-over').css('width', '620px');



						$('#image-over').css('height', '657px');



                        $('.text').css('right', 'auto');



                        $('#orange-quote').text("crane hire.");



						



						$('#orange-quote').css('float', 'left');



						$('#orange-quote').css('text-align', 'left');



						$('#banner-quote').css('text-align', 'left');



						$('#banner-quote').css('float', 'left');



						$('#findLink').css('float', 'left');



						



                        $('#banner-quote').text("with our range, sky is the limit.");



                        $('#banner-quote').css('width', '400px');



                        $('#banner-quote').css('color', '#000');



                        $("#image-over").attr("src", "images/crane2.png");



						



						$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner2.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                });







                $('#scale3').click(function () {



					slika=3;



                    $("#scale1").removeClass('active');



                    $("#scale2").removeClass('active');



                    $("#scale3").addClass('active');







                    $('.image-over').css('opacity', '0');



                    $(".image-over").removeClass('animated fadeIn');



                    $(".text").removeClass('animated fadeInDown');



                    $('.text').css('opacity', '0');







                    $("#findLink").attr("href", "traffic.php");



					 $('.image-over').css('right', 'auto');



                     $('.image-over').css('left', '0');



					 $('.image-over').css('top', 'auto');



					 $('#image-over').css('width', 'auto');



					 $('#image-over').css('height', 'auto');



                    $('.text').css('right', '0');



					



					$('#right1').css('height', '160px');



					



					$('#orange-quote').css('float', 'right');



					$('#orange-quote').css('text-align', 'right');



					$('#banner-quote').css('text-align', 'right');



					$('#banner-quote').css('float', 'right');



					$('#findLink').css('float', 'right');



						



                    $('#orange-quote').text("TRAFFIC MANAGEMENT.");



                    $('#banner-quote').text("We’ve had the green light from Australia’s biggest companies.");



                    $('#banner-quote').css('color', '#fff');



                    $('#banner-quote').css('width', '500px');



                    $("#image-over").attr("src", "images/guy3.png");



					



					$.fx.speeds.xslow = 2000; 



						 $('#firstBanner').fadeOut('slow', function(){



							    $('#firstBanner').css('background', '#160a26 url(images/banner3.jpg) center top');



								$('#firstBanner').fadeIn('xslow');



   						 });







                        $('.image-over').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeIn');



                            }, 1400);



                        });



						



						



                        $('.text').each(function () {



                            var $this = $(this);



                            setTimeout(function () {



                                $this.addClass('animated fadeInDown');



                            }, 2200);



                        });



               



                });







               $(document).ready(function () {



                $("#red").click(function (event) {



                    event.preventDefault();



                    $("#overlay-login").fadeToggle("fast");



                });



				



				  $("#loginfooter").click(function (event) {



                    event.preventDefault();



                    $("#overlay-login").fadeToggle("fast");



                });


				$("#okBtn").click(function () {

					 $("#overlay-pass").fadeOut(300);
					return false;
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



