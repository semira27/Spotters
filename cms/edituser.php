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

global $fname;
global $lname;
global $company;
global $email;
global $access;
global $id;

function selectUser() {
	global $database, $session;
		$userid = $_GET['id'];
		$GLOBALS['id'] =  $userid;
		$q = "SELECT * FROM users WHERE userid = '$userid' LIMIT 1";
		$result = $database->query($q);
		$num_rows = mysql_numrows($result);
		if(!$result || ($num_rows < 0)){ echo "Error displaying info"; }
		else if($num_rows > 0){
			
			while($item = mysql_fetch_assoc($result)) {
				$GLOBALS['fname'] =  htmlspecialchars($item['firstname']);
				$GLOBALS['lname'] =  htmlspecialchars($item['lastname']);
				$GLOBALS['company'] =  htmlspecialchars($item['company']);
				$GLOBALS['email'] =  htmlspecialchars($item['email']);
				$GLOBALS['access'] =  htmlspecialchars($item['userlevel']);
			}
	}
}

 ?>


                    
                    <?php
selectUser();
 ?>
	
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
                <div id="backendadmin-details" class="details height-mid">
                    <h1>Edit user</h1>
               	<form id="enquiry-form" action="process.php" method="post" class="add-user-form">

                    <fieldset>
					<label> <?php echo $form->error("fname"); ?></label>
                    <input id="fname" name="fname" type="text" placeholder="Firstname" value=" <?php echo $fname; ?>"  class="half input-errfix" />
                
                    <fieldset class="fieldset-padding">
					 <label> <?php echo $form->error("lname"); ?></label>
                    <input id="lname" name="lname" type="text" placeholder="Last name" value=" <?php echo $lname; ?>"  class="half halfright input-errfix" />
					</fieldset></fieldset>
                    <fieldset>
                    <label> <?php echo $form->error("email"); ?></label>
                    <input id="email" name="email" type="text" placeholder="Email (as username)" value=" <?php echo $email; ?>"  class="half second" />
					
                    <fieldset class="fieldset-padding">
					 <label> <?php echo $form->error("company"); ?></label>
                     <input id="company" name="company" type="text" placeholder="Company name" value=" <?php echo $company; ?>" class="half halfright input-errfix" />
					</fieldset>
                    </fieldset>
                    
                      <fieldset>
                    <label> </label>
                    <input id="password" name="password" type="password" placeholder="Password" value="" class="half second top-input-fix"/>
					
                                <fieldset class="fieldset-padding">
                    <label> <?php echo $form->error("select"); ?></label>
                    </fieldset>
                       <div id="selectdiv" class="half halfright second top-input-fix">

                        <select id="interestField" name="interestField">

                            <option value="1" <?php if($access == "1") echo "selected"; ?>>Spotters Compliances</option>

                            <option value="2"  <?php if($access == "2") echo "selected"; ?>>Crane Compliances</option>

                            <option value="3"  <?php if($access == "3") echo "selected"; ?>>Spotters & Crane Compliances</option>

                        </select>

                    </div>
                    
                    </fieldset>
 					<input type="text" style="visibility:hidden" name="userid" value="<?php echo $id; ?>" />
                    <input type="hidden" name="subupdateuser" value="1" />
                    <input id="submit" class="submit btn-backend-fix" type="submit" value="Update" />
                      <a id="cancel" class="submit btn-backend-fix" href="manageusers.php">Cancel</a>
                     
                    </form>
                </div>
           
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
			
		</script>

    </body>
</html>
