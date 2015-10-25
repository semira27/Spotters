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
<!DOCTYPE html>



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->



<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->



<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->



<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->



    <head>



        <meta charset="utf-8">

        <title>Spotters Australia</title>



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



global $date;

global $desc;



function selectTitle() {

	global $database, $session;

		$id = 1;

		$q = "SELECT * FROM title WHERE TitleID = '$id' LIMIT 1";

		$result = $database->query($q);

		$num_rows = mysql_numrows($result);

		if(!$result || ($num_rows < 0)){ echo "Error displaying info"; }
		else if($num_rows > 0){

			

			while($item = mysql_fetch_assoc($result)) {

				$data1 = $item['Date'];

				$data2 = $item['Description'];

				$GLOBALS['date'] =  htmlspecialchars($data1);

				$GLOBALS['desc'] =  htmlspecialchars($data2);

			}

	}

}



global $person;

global $address;

global $mobile;

global $fax;

global $general;

global $webmaster;



function selectContact() {

	global $database, $session;

		$id = 1;

		$q = "SELECT * FROM contact WHERE ContactID = '$id' LIMIT 1";

		$result = $database->query($q);

		$num_rows = mysql_numrows($result);

		if(!$result || ($num_rows < 0)){ echo "Error displaying info"; }

		else if($num_rows > 0){

			

			while($item = mysql_fetch_assoc($result)) {

				$data_person = $item['ContactPerson'];

				$data_address = $item['Address'];

				$data_mobile = $item['Mobile'];

				$data_fax = $item['Fax'];

				$data_general = $item['General'];

				$data_webmaster = $item['Webmaster'];

				$GLOBALS['person'] =  htmlspecialchars($data_person);

				$GLOBALS['address'] =  htmlspecialchars($data_address);

				$GLOBALS['mobile'] =  htmlspecialchars($data_mobile);

				$GLOBALS['fax'] =  htmlspecialchars($data_fax);

				$GLOBALS['general'] =  htmlspecialchars($data_general);

				$GLOBALS['webmaster'] =  htmlspecialchars($data_webmaster);

			}

	}

}


function selectDocuments($cat) {

	global $database, $session;

		$q = "SELECT * FROM documents WHERE category = '$cat' and active = 1";

		$result = $database->query($q);

		$num_rows = mysql_numrows($result);

		if(!$result || ($num_rows < 0)){ /*echo "Error displaying info";*/ }

		else if($num_rows > 0){
			
			while($item = mysql_fetch_assoc($result)) {

			$id = $item['documentID'];

			$docpath = $item['docpath'];

			$doctitle = $item['doctitle'];
			
			$date = $item['docdate'];
			$fdate = substr($date,0,10);
			$fdate .= ' at ';
			$fdate .= substr($date,11,8);
			
			 echo '<div class="halffull document">';
			 echo '<img src="../img/document.png" />';
			 echo '<span class="underline-width2">';
			 echo '<h3>' . $doctitle . '</h3>';
			 echo '</span>';
			 echo ' <h6>Uploaded on ' .$fdate . '</h6>';
			 echo '<a id="' . $id . '"  class="button-mini remove">Remove</a>';
			 echo '</div>';
			 echo '<div class="halffull download">';
 			 echo '<a href="../files/'.$docpath.'" target="_blank"  class="button downloadbtn">download</a>';
			 echo '</div>';

			}

	}

}




 ?>

	

       <?php selectTitle(); ?>

        <?php selectContact(); ?>

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



                <div id="backendadmin-details" class="details height-mid2">



                    <h1>COMPLIANCE DOCUMENTS</h1>



                    <div id="backendadmin-options1" class="half">



                        <a id="crane" class="button dark">CRANE</a>



                        <a id="spotters" class="button light">SPOTTERS</a>



                        <h4><?php echo $date ?></h4>



                        <a href="title.php" class="button-mini">Edit</a>



                    </div>



                    <div id="backendadmin-options2" class="half halfright">



                        <a href="manageusers.php" class="button dark">Manage users</a>



                    </div>



                    <h5><?php echo $desc ?></h5>

					<div id="doc-area1">
					<?php selectDocuments('0'); ?>

                      <div class="halffull document"> </div>

                    <div class="halffull download">  </div>

					</div>
                    
                    <div id="doc-area2" style="display:none">
					<?php selectDocuments('1'); ?>

                      <div class="halffull document"> </div>

                    <div class="halffull download">  </div>

					</div>

                </div>



                <form id="document-form" action="process.php" method="post" enctype="multipart/form-data" class="after-backendadmin">
				<fieldset>
                    <h1 id="upload-title">Upload new documents</h1>
                    </fieldset>

                    <fieldset>

					<label class="error"> <?php echo $form->error("uploadname"); ?></label>

					<input id="upload-name" name="title" type="text" placeholder="Enter file name" value="<?php echo $form->value("title"); ?>"/>

                  <fieldset>

                      <div id="selectdiv" class="half halfright second" style="width:250px">



                        <select id="category" name="category">



                           <option value="0">Crane</option>



                            <option value="1">Spotters</option>



                        </select>



                        </div>

                        </fieldset>

                         </fieldset>

<br class="clear"/>

<fieldset>

<label class="error"> <?php echo $form->error("document"); ?></label>

<br/>

<div class="fileUpload">

    <span>Browse</span>

    <input id="uploadBtn" name="document" type="file" class="upload" />

</div>

     <input id="uploadFile" placeholder="No file selected" disabled="disabled" />



				</fieldset>



				<input type="hidden" name="subadddocument" value="1" />



               <input id="document-btn" type="submit" value="Add document" class="button downloadbtn browse" />



                </form>



            </div>



        </div>







        <div id="backend-admin-bg" class="full">



            <div class="container">



                <div class="details backend-contact-info">



                    <h1>Contact information</h1>



                    <a href="contactinfo.php" class="button-mini">Edit</a>



                    <div id="contact-details1" class="half">



                        <h3>Contact Person: <?php echo $person ?></h3>



                        <h3>Postal address:  <?php echo $address ?></h3>



                        <h3>Mobile:  <?php echo $mobile ?></h3>



                        <h3>Fax:  <?php echo $fax ?></h3>



                    </div>



                    <div id="contact-details2" class="half halfright">



                        <h3>General Information: <small> <?php echo $general ?></small></h3>



                        <h3>Operations email: <small> <?php echo $webmaster ?></small></h3>



                    </div>



                </div>



            </div>



        </div>







        <div class="footer full">



            <ul> </ul>



        </div>









        <div id="footer2" class="footer full">

            <ul>

                <li><a>&copy; 2015 Spotters Australia</a></li>



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



                $("#category").selectbox();



            });



			

document.getElementById("uploadBtn").onchange = function () {

    document.getElementById("uploadFile").value = this.value;

};



	var del_id;


	 $(function () {
		 
	 $("#yes").click(function () {
					var subremove = 1;

					  $.ajax({

      				  type:'POST',

       			      url:"process.php",

     				  data:'delete_id='+del_id + '&subremove='+subremove,

     			      success:function(data) {

      					  if(data) {   location.reload();  } 

							else {  }

     						 }

   				});

                });



				  $("#no").click(function () {
                    $("#overlay-pass").fadeToggle("fast");
                });


				  $(".remove").click(function (event) {

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



			$(function () {
			    $("#spotters").click(function (e) {
			      e.preventDefault();
				  if($('#spotters').hasClass('button light')) {
 				  $('#spotters').removeClass('button light');
			      $('#spotters').addClass('button dark');
				  $('#crane').removeClass('button dark');
			      $('#crane').addClass('button light');
					}

				$("#doc-area1").fadeOut("slow");
				$("#doc-area1").css("display","none");
				$("#doc-area2").delay(100).fadeIn("slow");

			    });


				  $("#crane").click(function (e) {
			       e.preventDefault();
				  if($('#crane').hasClass('button light')) {
 				  $('#crane').removeClass('button light');
			      $('#crane').addClass('button dark');
				  $('#spotters').removeClass('button dark');
			      $('#spotters').addClass('button light');
				   }
				
				$("#doc-area2").fadeOut("slow");
				$("#doc-area2").css("display","none");
				$("#doc-area1").delay(100).fadeIn("slow");
			    });
			});
		</script>







    </body>



</html>



