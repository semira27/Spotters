<?php



include("../include/session.php");


class Process {







   function Process(){



      global $session;



      if(isset($_POST['sublogin'])){ $this->procLogin(); }

	  else if(isset($_POST['subadddocument'])){ $this->procAddDocument(); }

	  else if(isset($_POST['subupdateinfo'])){ $this->procEditContactInfo(); }

	  else if(isset($_POST['subupdatetitle'])){ $this->procEditTitle(); }

	  else if(isset($_POST['subadduser'])){ $this->procAddUser(); }

	  else if(isset($_POST['subupdateuser'])){ $this->procUpdateUser(); }

	  else if(isset($_POST['subdelete'])){ $this->procDeleteUser(); }

	  else if(isset($_POST['subremove'])){ $this->procRemoveDocument(); }

	  else if(isset($_POST['forgotpass'])){ $this->procForgotPass(); }

      else if($session->logged_in){ $this->procLogout(); }

      else{ header("Location: ".$session->referrer);}



   }



   



   function procLogin(){
      global $session, $form;

      $retval = $session->login($_POST['user'], $_POST['pass'], isset($_POST['remember']));

      if($retval){ 
	  header("Location: ".$session->referrer); }

      else{
         $_SESSION['value_array'] = $_POST;

         $_SESSION['error_array'] = $form->getErrorArray();

		 header("Location: ".$session->referrer);
      }
   }



   



   function procLogout(){



      global $session;



      $retval = $session->logout();



       header("Location: ".$session->referrer);



   }



   



    function procEditTitle() {



		global $database, $session, $form;



		if($session->isAdmin()) {



			$date = $_POST['date'];



			$desc = $_POST['desc'];



			$subid = 1;



			



			$field = "date";



			if(!$date || strlen($date = trim($date)) == 0){ $form->setError($field, "* Please enter month and year"); }



			else{ $date = htmlspecialchars($date, ENT_QUOTES); }



			



			$field = "desc";



			if(!$desc || strlen($desc = trim($desc)) == 0){ $form->setError($field, "* Please enter description"); }



			else{ $desc = htmlspecialchars($desc, ENT_QUOTES); }			



			



			if($form->num_errors > 0){



				$_SESSION['value_array'] = $_POST;



				$_SESSION['error_array'] = $form->getErrorArray();



				header("Location: title.php");



			} else {



				$q = "UPDATE title SET Date = '$date', Description = '$desc' WHERE TitleID = '$subid'";



				$database->query($q);



				header("Location: backendadmin.php");



			}



		} else { echo '<p>You don\'t have premission!</p>'; }



	}



   



   	function procEditContactInfo(){



      global $database, $session, $form;



		if($session->isAdmin()) {



			$person = $_POST['person'];



			$address = $_POST['address'];



			$mobile = $_POST['mobile'];



			$fax = $_POST['fax'];



			$general = $_POST['general'];



			$webmaster = $_POST['webmaster'];



			$subid = 1;



			



			$field = "person";



			if(!$person || strlen($person = trim($person)) == 0){ $form->setError($field, "* Please enter contact person"); }



			else{ $person = htmlspecialchars($person, ENT_QUOTES); }



			



			$field = "address";



			if(!$address || strlen($address = trim($address)) == 0){ $form->setError($field, "* Please enter address"); }



			else{ $address = htmlspecialchars($address, ENT_QUOTES); }



			



			$field = "mobile";



			if(!$mobile || strlen($mobile = trim($mobile)) == 0){ $form->setError($field, "* Please enter mobile"); }



			else{ $mobile = htmlspecialchars($mobile, ENT_QUOTES); }



			



			$field = "fax";



			if(!$fax || strlen($fax = trim($fax)) == 0){ $form->setError($field, "* Please enter fax"); }



			else{ $fax = htmlspecialchars($fax, ENT_QUOTES); }



			



			$field = "general";



			if(!$general || strlen($general = trim($general)) == 0){ $form->setError($field, "* Please enter general"); }



			else{ $general = htmlspecialchars($general, ENT_QUOTES); }



			



			$field = "webmaster";



			if(!$webmaster || strlen($webmaster = trim($webmaster)) == 0){ $form->setError($field, "* Please enter webmaster"); }



			else{ $webmaster = htmlspecialchars($webmaster, ENT_QUOTES); }



			



			if($form->num_errors > 0){



				$_SESSION['value_array'] = $_POST;



				$_SESSION['error_array'] = $form->getErrorArray();



				header("Location: contactinfo.php");



			} else {



				$q = "UPDATE contact SET ContactPerson = '$person', Address = '$address', Mobile = '$mobile', Fax = '$fax', General = '$general', Webmaster = '$webmaster' WHERE ContactID = '$subid'";



				$database->query($q);



				header("Location: backendadmin.php");



			}



		} else { echo '<p>You don\'t have premission!</p>'; }



   }

      function procForgotPass(){



      global $database, $form, $session;



			$email = $_POST['email-forgot'];	

			$newpass1 = $this->generateRandStr(8);

			$newpass2 = md5($newpass1);
			
			/*$response;


		$field = "err-forgot";
			if(!$database->emailTaken($email)){

			$form->setError($field, "* Email is not valid");
			
			}	
			
			if(!$email || strlen($email = trim($email)) == 0){

			$form->setError($field, "* Please enter e-mail");
			
			}	
			
			
			if($form->num_errors > 0){
				$_SESSION['value_array'] = $_POST;
				$_SESSION['error_array'] = $form->getErrorArray();
				$response = 'error';
			}

			else {	*/
			
				$q = "UPDATE users SET password = '$newpass2' WHERE email = '$email'";
				$database->query($q);
				
				$message = "You have requested a password reset. Please see new password below. <a href='http://www.digitalpieces.com.au/development/semira/spotters3/index.php'>Click here</a> to login. <br/> <br/>";

				$message .="<b>Email:</b> $email <br/>";

				$message .="<b>Password:</b> $newpass1 <br/>";

				$to = "$email";

				$subject = "Spotters Australia - Forgotten Password";

				$headers = 'MIME-Version: 1.0' . "\r\n";

				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				$headers .= "From: info@spottersau.com.au";

				mail($to,$subject,$message,$headers);
	

   }





   function procAddUser(){



      global $database, $session, $form;



		if($session->isAdmin()) {

			

			$fname = $_POST['fname'];

			

			$lname = $_POST['lname'];



			$company = $_POST['company'];



			$email = $_POST['email'];	



			$password = $_POST['password'];		



			$select = $_POST["interestField"];



			$time = time();

			

			$userid = $this->generateRandID();



			



			$field = "email"; 



			if($database->emailTaken($email)){



			$form->setError($field, "* Email is taken");



			}	

			

			

			if(!$email || strlen($email = trim($email)) == 0){ $form->setError($field, "* Please enter email"); }



			else{ $email = htmlspecialchars($email, ENT_QUOTES); }

			

			

			$field = "fname";

			if(!$fname || strlen($fname = trim($fname)) == 0){ $form->setError($field, "* Please enter first name"); }



			else{ $fname = htmlspecialchars($fname, ENT_QUOTES); }

			

			$field = "lname";

			if(!$lname || strlen($lname = trim($lname)) == 0){ $form->setError($field, "* Please enter last name"); }



			else{ $lname = htmlspecialchars($lname, ENT_QUOTES); }

			

			

			

			$field = "company";



			if(!$company || strlen($company = trim($company)) == 0){ $form->setError($field, "* Please enter company"); }



			else{ $company = htmlspecialchars($company, ENT_QUOTES); }



			

			$field = "password";



			if(!$password || strlen($password = trim($password)) == 0){ $form->setError($field, "* Please enter password"); }



			else{ $password = md5($password); }

			

			

			$field = "select";



			if($select == 0){ $form->setError($field, "* Please enter access level"); }

			



			if($form->num_errors > 0){



				$_SESSION['value_array'] = $_POST;



				$_SESSION['error_array'] = $form->getErrorArray();



				header("Location: users.php");



			} else {



			$q = "INSERT INTO users VALUES ('$email', '$fname', '$lname', '$password', '$userid', '$select', '$company', '$time', '1')"; 



			$database->query($q);

			header("Location: manageusers.php");

			}



		} 



		else { echo '<p>You don\'t have permission!</p>'; }



   }

   

    function procDeleteUser(){



      global $database, $session, $form;



		if($session->isAdmin()) {

			

			$id = $_POST['delete_id'];

			$q = "UPDATE users SET active = '0' WHERE userid = '$id'"; 



			$database->query($q);

			header("Location: manageusers.php");



		} 



		else { echo '<p>You don\'t have permission!</p>'; }



   }
   
   function procRemoveDocument(){



      global $database, $session, $form;



		if($session->isAdmin()) {

			

			$id = $_POST['delete_id'];

			$q = "UPDATE documents SET active = '0' WHERE documentID = '$id'";


			$database->query($q);

			header("Location: backendadmin.php");



		} 



		else { echo '<p>You don\'t have permission!</p>'; }



   }




   function procUpdateUser(){



      global $database, $session, $form;



		if($session->isAdmin()) {

			

			$fname = $_POST["fname"];

			

			$lname = $_POST["lname"];



			$company = $_POST['company'];



			$email = $_POST['email'];	



			$password = $_POST['password'];		



			$select = $_POST["interestField"];

			

			$id = $_POST["userid"];



			$time = time();



			

			$field = "fname"; 

			if(!$fname || strlen($fname = trim($fname)) == 0){ $form->setError($field, "* Please enter first name"); }



			else{ $fname = htmlspecialchars($fname, ENT_QUOTES); }

			

			

			$field = "lname"; 

			if(!$lname || strlen($lname = trim($lname)) == 0){ $form->setError($field, "* Please enter last name"); }



			else{ $lname = htmlspecialchars($lname, ENT_QUOTES); }

			

			



			$field = "email"; 



			if($database->emailTaken($email)){



			$form->setError($field, "* Email is taken");



			}	

			

			if(!$email || strlen($email = trim($email)) == 0){ $form->setError($field, "* Please enter email"); }



			else{ $email = htmlspecialchars($email, ENT_QUOTES); }

			

			

			$field = "company";



			if(!$company || strlen($company = trim($company)) == 0){ $form->setError($field, "* Please enter company"); }



			else{ $company = htmlspecialchars($company, ENT_QUOTES); }



			



			

			

			$field = "select";



			if($select == 0){ $form->setError($field, "* Please enter access level"); }

			



			if($form->num_errors > 0){



				$_SESSION['value_array'] = $_POST;



				$_SESSION['error_array'] = $form->getErrorArray();



				header("Location: edituser.php?id=" . $id . "");



			} else {



			

			if(!$password || strlen($password = trim($password)) == 0)

			{ 

				$q = "UPDATE users SET email = '$email', firstname = '$fname', lastname = '$lname', userlevel = '$select', company = '$company' WHERE userid = '$id'";

			}



			else

			{ 

				$q = "UPDATE users SET email = '$email', firstname = '$fname', lastname = '$lname', password = '$password', userlevel = '$select', company = '$company' WHERE userid = '$id'";

			}

			



			$database->query($q);

			header("Location: manageusers.php");

			}



		} 



		else { echo '<p>You don\'t have permission!</p>'; }



   }



   



   function procAddDocument(){



      global $database, $session, $form;



		if($session->isAdmin()) {



			$subdocument = $_POST['document'];



			$title = $_POST['title'];	



			$category = $_POST['category'];		
			
			$date = new DateTime();
			$fdate = $date->format('d/m/Y h:i A');
			
			

			$field = "uploadname"; 

			if(strlen($title = trim($title)) == 0){



			$form->setError($field, "* Title not entered");



			}			



			



			$field = "document"; 



			if(!is_uploaded_file($_FILES['document']['tmp_name'])){



				$form->setError($field, "* Please select document"); }



			else { 



				$subdocument = pathinfo($_FILES['document']['name']);		



				$document_name = time().'.'.strtolower($subdocument['extension']);



			}



			



			if($form->num_errors > 0){



				$_SESSION['value_array'] = $_POST;



				$_SESSION['error_array'] = $form->getErrorArray();



				header("Location: backendadmin.php");



			} else {



				$file = '../files/'.$document_name;



					if(move_uploaded_file($_FILES['document']['tmp_name'], $file)) {



						$q = "INSERT INTO documents VALUES ('', '$file', '$title', '$fdate' ,'$category', '1')"; 



					} 



				$database->query($q);



				header("Location: backendadmin.php");



			}



		} else { echo '<p>You don\'t have permission!</p>'; }



   }

   

      function generateRandID(){

      return md5($this->generateRandStr(16));

   }

   

   

      function generateRandStr($length){



      $randstr = "";



      for($i=0; $i<$length; $i++){



         $randnum = mt_rand(0,61);



         if($randnum < 10){



            $randstr .= chr($randnum+48);



         }else if($randnum < 36){



            $randstr .= chr($randnum+55);



         }else{



            $randstr .= chr($randnum+61);



         }



      }



      return $randstr;



   }



};







$process = new Process;







?>



