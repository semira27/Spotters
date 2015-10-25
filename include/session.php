<?php

include("database.php");

include("form.php");



class Session {

   var $email;

   var $userid;

   var $userlevel;

   var $time;

   var $logged_in;

   var $userinfo = array();

   var $url;

   var $referrer;



   function Session(){

      $this->time = time();

      $this->startSession();

   }



   function startSession(){

      global $database;

      session_start();



      $this->logged_in = $this->checkLogin();



      if(!$this->logged_in){

         $this->email = $_SESSION['email'] = GUEST_NAME;

         $this->userlevel = GUEST_LEVEL;

         $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);

      } 

	  else{ 

	  $database->addActiveUser($this->email, $this->time); 

	  }

      

      $database->removeInactiveUsers();

      $database->removeInactiveGuests();

	

	  if(isset($_SESSION['url'])){ 

	  if($this->userlevel == 9){$this->userlevel = ADMIN_LEVEL; $this->referrer = "backendadmin.php"; }

	  else if($this->userlevel == 3){$this->userlevel = SC_LEVEL; $this->referrer = "backenduser.php"; }

	  else if($this->userlevel == 2){$this->userlevel = CRANE_LEVEL; $this->referrer = "backendusercrane.php"; }

	  else if($this->userlevel == 1){$this->userlevel = SPOTTERS_LEVEL; $this->referrer = "backenduserspotters.php"; }

	  }

	  else{ $this->referrer = "/"; }

      $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];  

	

   }



   function checkLogin(){

      global $database;

      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){

         $this->email = $_SESSION['email'] = $_COOKIE['cookname'];

         $this->userid   = $_SESSION['userid']   = $_COOKIE['cookid'];

      }



      if(isset($_SESSION['email']) && isset($_SESSION['userid']) && $_SESSION['email'] != GUEST_NAME){

         if($database->confirmUserID($_SESSION['email'], $_SESSION['userid']) != 0){

            unset($_SESSION['email']);

            unset($_SESSION['userid']);

            return false;

         }

         $this->userinfo  = $database->getUserInfo($_SESSION['email']);

         $this->email  = $this->userinfo['email'];

         $this->userid    = $this->userinfo['userid'];

         $this->userlevel = $this->userinfo['userlevel'];

		 

         return true;

      } else{ return false; }

   }



   function login($subuser, $subpass, $subremember){

      global $database, $form;

	  

	  $this->referrer = "index.php";



      $field = "user";  //Use field name for email

      if(!$subuser || strlen($subuser = trim($subuser)) == 0){

         $form->setError($field, "* Email not entered");

      }



      /* Password error checking */

      $field = "pass";  //Use field name for password

      if(!$subpass){

         $form->setError($field, "* Password not entered");

      }

      

      /* Return if form errors exist */

      if($form->num_errors > 0){

         return false;

      }



      /* Checks that email is in database and password is correct */

      $subuser = stripslashes($subuser);

      $result = $database->confirmUserPass($subuser, md5($subpass));



      /* Check error codes */

      if($result == 1){

         $field = "user";

         $form->setError($field, "* Email not found");

      }

      else if($result == 2){

         $field = "pass";

         $form->setError($field, "* Invalid password");

      }

      

      /* Return if form errors exist */

      if($form->num_errors > 0){

         return false;

      }



      /* email and password correct, register session variables */

      $this->userinfo  = $database->getUserInfo($subuser);

      $this->email  = $_SESSION['email'] = $this->userinfo['email'];

      $this->userid    = $_SESSION['userid']   = $this->generateRandID();

      $this->userlevel = $this->userinfo['userlevel'];

      

      /* Insert userid into database and update active users table */

      $database->updateUserField($this->email, "userid", $this->userid);

      $database->addActiveUser($this->email, $this->time);

      $database->removeActiveGuest($_SERVER['REMOTE_ADDR']);



      /**

       * This is the cool part: the user has requested that we remember that

       * he's logged in, so we set two cookies. One to hold his email,

       * and one to hold his random value userid. It expires by the time

       * specified in constants.php. Now, next time he comes to our site, we will

       * log him in automatically, but only if he didn't log out before he left.

       */

      if($subremember){

         setcookie("cookname", $this->email, time()+COOKIE_EXPIRE, COOKIE_PATH);

         setcookie("cookid",   $this->userid,   time()+COOKIE_EXPIRE, COOKIE_PATH);

      }



	  if($this->userlevel == 9){$this->userlevel = ADMIN_LEVEL; $this->referrer = "backendadmin.php"; }

	  else if($this->userlevel == 3){$this->userlevel = SC_LEVEL;$this->referrer = "backenduser.php"; }

	  else if($this->userlevel == 2){$this->userlevel = CRANE_LEVEL;$this->referrer = "backendusercrane.php"; }

	  else if($this->userlevel == 1){$this->userlevel = SPOTTERS_LEVEL;$this->referrer = "backenduserspotters.php"; }

	  

	  

      /* Login completed successfully */

      return true;

   }



   /**

    * logout - Gets called when the user wants to be logged out of the

    * website. It deletes any cookies that were stored on the users

    * computer as a result of him wanting to be remembered, and also

    * unsets session variables and demotes his user level to guest.

    */

   function logout(){

      global $database;  //The database connection

      /**

       * Delete cookies - the time must be in the past,

       * so just negate what you added when creating the

       * cookie.

       */

      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){

         setcookie("cookname", "", time()-COOKIE_EXPIRE, COOKIE_PATH);

         setcookie("cookid",   "", time()-COOKIE_EXPIRE, COOKIE_PATH);

      }



      /* Unset PHP session variables */

      unset($_SESSION['email']);

      unset($_SESSION['userid']);



      /* Reflect fact that user has logged out */

      $this->logged_in = false;

      

      /**

       * Remove from active users table and add to

       * active guests tables.

       */

      $database->removeActiveUser($this->email);

      $database->addActiveGuest($_SERVER['REMOTE_ADDR'], $this->time);

      

      /* Set user level to guest */

      $this->email  = GUEST_NAME;

      $this->userlevel = GUEST_LEVEL;

	  

	  $this->referrer = "logout.php"; 

   }





   /**

    * isAdmin - Returns true if currently logged in user is

    * an administrator, false otherwise.

    */

   function isAdmin(){

      return ($this->userlevel == ADMIN_LEVEL || $this->userlevel == 9);

   }
   
      function isCrane(){

      return ($this->userlevel == CRANE_LEVEL || $this->userlevel == 2);

   }
   
         function isSpotters(){

      return ($this->userlevel == SPOTTERS_LEVEL || $this->userlevel == 1);

   }
   
            function isCraneSpotters(){

      return ($this->userlevel == SC_LEVEL || $this->userlevel == 3);

   }

   

   /**

    * generateRandID - Generates a string made up of randomized

    * letters (lower and upper case) and digits and returns

    * the md5 hash of it to be used as a userid.

    */

   function generateRandID(){

      return md5($this->generateRandStr(16));

   }

   

   /**

    * generateRandStr - Generates a string made up of randomized

    * letters (lower and upper case) and digits, the length

    * is a specified parameter.

    */

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





/**

 * Initialize session object - This must be initialized before

 * the form object because the form uses session variables,

 * which cannot be accessed unless the session has started.

 */

$session = new Session;



/* Initialize form object */

$form = new Form;



?>