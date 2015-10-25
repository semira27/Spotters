<!DOCTYPE html>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->



<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->



<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->



<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->



    <head>



        <meta charset="utf-8">

        <title>Manage users | Spotters Australia</title>



        <meta name="description" content="">



        <meta name="robots" content="noindex" />



		<meta name="revisit-after" content="1 month">



	    <link rel="canonical" href="/">







          <!--[if IE]><link rel="shortcut icon" href="../img/favicon.ico"><![endif]-->



        <link rel="icon" href="../img/favicon.ico">



        <link rel="apple-touch-icon-precomposed" href="../img/apple-touch-icon-precomposed.png">







                <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,300,700,800' rel='stylesheet' type='text/css'>



        <link rel="stylesheet" href="../css/flexslider.css" type="text/css">



        <link rel="stylesheet" href="../css/jquery.selectbox.css" type="text/css">



        



        <link rel="stylesheet" href="../css/reset.css" type="text/css">



        <link rel="stylesheet" href="../css/css3.css" type="text/css">



        



        



        <link rel="stylesheet" href="../css/general.css" type="text/css">



        <link rel="stylesheet" href="../css/animate.css" type="text/css">















    </head>



    <body>



        <!--[if lt IE 7]>



            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>



        <![endif]-->   



<?php
include("../include/session.php");

if(!$session->logged_in){
    header("Location: index.php");
    exit;
}

	if(($session->logged_in) && (!$session->isAdmin())){
		$session->logout();
    header("Location: index.php");
    exit;}

?>


<?php 

function selectUsers() {

	global $database, $session;

		$q = "SELECT * FROM users WHERE userlevel != '9' and active = '1'";

		$result = $database->query($q);

		$num_rows = mysql_numrows($result);

		if(!$result || ($num_rows < 0)){ echo "Error displaying info"; }

		else if($num_rows > 0){

			

			while($item = mysql_fetch_assoc($result)) {

			$id = $item['userid'];

			$fname = $item['firstname'];

			$lname = $item['lastname'];

			$access = $item['userlevel'];

			if($access == 1) {$access = 'Spotters Compliances';}

			else if($access == 2) {$access = 'Crane Compliances';}

			else if($access == 3) {$access = 'Spotters & Crane Compliances';}

			

			   echo '<div class="halffull document document-min">';

			   echo '<span class="underline-width">';

               echo '<a href="edituser.php?id='.$id.' "><h6 class="users-name">' . htmlspecialchars_decode($fname) . ' ' . htmlspecialchars_decode($lname) . '</h6></a>';

			   echo '</span>';

				echo '<h6 class="users-company">' .htmlspecialchars_decode($access). '</h6>';

				echo '</div>';



			 echo  '<div class="halffull download document-min">';

			 echo '<a href="edituser.php?id='.$id.' " class="button-mini  users-options">Edit</a>';

			 echo '<a id="' . $id . '" class="button-mini users-options deletebtn" >Delete</a>';

			 echo '</div>';

			}

	}

}



 ?>


    <div id="overlay-pass" class="overlay" style="display:none">



            <div id="pass-wrapper" class="login-wrapper">



                <form class="login-content" action="" method="POST">



                    <h1 id="q-popup-title">Are you sure?</h1>



                    <div id="q-popup-btns">



                       <a id="no" class="submit q-popup-btn">no</a>

					   <a id="yes" class="submit q-popup-btn">yes</a>



                    </div>



                 



                </form>



            </div>



        </div> 



        <div id="company-head" class="head full">



            <img src="../img/logo-background2.png" />



            <div class="head-container">



                   <a><img id="logo" src="../img/logo.png" /></a>



                <ul class="top-nav">



                    <li><a id="red" href="process.php">Log out</a></li>



                </ul>



            </div>



        </div>



        <div class="full">



            <div class="bottom-nav-bg3"></div>



        </div>





        <div class="white-fix"></div>







        <div class="full">



            <div class="container">



                <div id="backendadmin-details" class="details manageusers">



                    <h1 id="users-title">Manage users</h1>



                    <h5 id="users-back"><a href="backendadmin.php">BACK </a>to previous page</h5>



                    <br class="clear"/>



                         <div id="backendadmin-options1" class="half nopaddingtop">



                        <a id="allusers" class="button dark">VIEW ALL USERS</a>



                        <a id="createuser" href="users.php" class="button light">CREATE USER</a>



                    </div>



                      <div id="backendadmin-options2" class="half halfright nopaddingtop">



                    </div>



                    <h5 id="users-table-name">Name</h5>



                    <h5 id="users-table-access">Access level</h5>



                    <br/>



                    <div id="users-table">

                    

                    <?php

selectUsers();

 ?>



                           <div class="halffull document document-min">



                    </div>



                    <div class="halffull download document-min">



                    </div>



                    </div>



                </div>



           <div class="clear"></div>



            </div>



        </div>









        <div class="footer full">



            <ul>



        



            </ul>



        </div>







        <div id="footer2" class="footer full">



            <ul>



                <li><a href="index.php">&copy; 2015 Spotters Australia</a></li>



                <li></li>



            </ul>



        </div>



        



        <script src="../js/jquery-1.7.2.min.js"></script>



        <script src="../js/backstretch.min.js"></script>



        <script src="../js/easing.js"></script>



        <script type="text/javascript" src="../js/inview.js"></script>



         <script src="../js/jquery.selectbox-0.2.min.js"></script>







        



        <script>



		  $(function () {



                $("#interestField").selectbox();



            });

			


			var del_id;


			 $(function () {

				 $("#yes").click(function () {
					var subdelete = 1;

					  $.ajax({

      				  type:'POST',

       			      url:"process.php",

     				  data:'delete_id='+del_id + '&subdelete='+subdelete,

     			      success:function(data) {

      					  if(data) {   location.reload();  } 

							else {  }

     						 }

   				});

                });



				 $("#no").click(function () {
                    $("#overlay-pass").fadeToggle("fast");
                });


				  $(".deletebtn").click(function (event) {

					del_id = $(this).attr('id');
					
                    event.preventDefault();

                    $("#overlay-pass").fadeToggle("slow");
                });

				

				   $(document).keyup(function (e) {

                    if (e.keyCode == 27 &&  $("#overlay-pass").css("display") != "none") {

                        event.preventDefault();

                       $("#overlay-pass").fadeToggle("fast");

                    }

                });



            });



			



		</script>







    </body>



</html>



