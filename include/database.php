<?php
include("constants.php");      
class MySQLDB {
   var $connection;
   var $num_active_users;
   var $num_active_guests;
   var $num_members;

   function MySQLDB(){
      $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
      mysql_select_db(DB_NAME, $this->connection) or die(mysql_error());
      $this->num_members = -1;
      if(TRACK_VISITORS){ $this->calcNumActiveUsers(); $this->calcNumActiveGuests(); }
   }
   function confirmUserPass($email, $password){
      if(!get_magic_quotes_gpc()) { $email = addslashes($email); }
      $q = "SELECT password FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysql_query($q, $this->connection);
      if(!$result || (mysql_numrows($result) < 1)){ return 1; }

      $dbarray = mysql_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);

      if($password == $dbarray['password']){  return 0; }
      else{ return 2; }
   }
   
   function confirmUserID($email, $userid){
      if(!get_magic_quotes_gpc()) { $email = addslashes($email); }
      $q = "SELECT userid FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysql_query($q, $this->connection);
      if(!$result || (mysql_numrows($result) < 1)){ return 1; }
      $dbarray = mysql_fetch_array($result);
      $dbarray['userid'] = stripslashes($dbarray['userid']);
      $userid = stripslashes($userid);
      if($userid == $dbarray['userid']){ return 0; }
      else{ return 2; }
   }
   
   function emailTaken($email){
      if(!get_magic_quotes_gpc()){ $email = addslashes($email); }
      $q = "SELECT email FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysql_query($q, $this->connection);
      return (mysql_numrows($result) > 0);
   }
   
   function emailBanned($email){
      if(!get_magic_quotes_gpc()){ $email = addslashes($email); }
      $q = "SELECT email FROM ".TBL_BANNED_USERS." WHERE email = '$email'";
      $result = mysql_query($q, $this->connection);
      return (mysql_numrows($result) > 0);
   }
   
   function addNewUser($email, $password, $email){
      $time = time();
      if(strcasecmp($email, ADMIN_NAME) == 0){ $ulevel = ADMIN_LEVEL; }
	  else{ $ulevel = USER_LEVEL; }
      $q = "INSERT INTO ".TBL_USERS." VALUES ('$email', '$password', '0', $ulevel, '$email', $time)";
      return mysql_query($q, $this->connection);
   }
   
   function updateUserField($email, $field, $value){
      $q = "UPDATE ".TBL_USERS." SET ".$field." = '$value' WHERE email = '$email'";
      return mysql_query($q, $this->connection);
   }
   
   function getUserInfo($email){
      $q = "SELECT * FROM ".TBL_USERS." WHERE email = '$email'";
      $result = mysql_query($q, $this->connection);
      if(!$result || (mysql_numrows($result) < 1)){ return NULL; }
      $dbarray = mysql_fetch_array($result);
      return $dbarray;
   }
   
   function getNumMembers(){
      if($this->num_members < 0){
         $q = "SELECT * FROM ".TBL_USERS;
         $result = mysql_query($q, $this->connection);
         $this->num_members = mysql_numrows($result);
      }
      return $this->num_members;
   }
  
   function calcNumActiveUsers(){
      $q = "SELECT * FROM ".TBL_ACTIVE_USERS;
      $result = mysql_query($q, $this->connection);
      $this->num_active_users = mysql_numrows($result);
   }
   
   function calcNumActiveGuests(){
      $q = "SELECT * FROM ".TBL_ACTIVE_GUESTS;
      $result = mysql_query($q, $this->connection);
      $this->num_active_guests = mysql_numrows($result);
   }
   
   function addActiveUser($email, $time){
      $q = "UPDATE ".TBL_USERS." SET timestamp = '$time' WHERE email = '$email'";
      mysql_query($q, $this->connection);      
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_USERS." VALUES ('$email', '$time')";
      mysql_query($q, $this->connection);
      $this->calcNumActiveUsers();
   }
   
   function addActiveGuest($ip, $time){
      if(!TRACK_VISITORS) return;
      $q = "REPLACE INTO ".TBL_ACTIVE_GUESTS." VALUES ('$ip', '$time')";
      mysql_query($q, $this->connection);
      $this->calcNumActiveGuests();
   }
   
   function removeActiveUser($email){
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE email = '$email'";
      mysql_query($q, $this->connection);
      $this->calcNumActiveUsers();
   }
   
   function removeActiveGuest($ip){
      if(!TRACK_VISITORS) return;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE ip = '$ip'";
      mysql_query($q, $this->connection);
      $this->calcNumActiveGuests();
   }
   
   function removeInactiveUsers(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-USER_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_USERS." WHERE timestamp < $timeout";
      mysql_query($q, $this->connection);
      $this->calcNumActiveUsers();
   }

   function removeInactiveGuests(){
      if(!TRACK_VISITORS) return;
      $timeout = time()-GUEST_TIMEOUT*60;
      $q = "DELETE FROM ".TBL_ACTIVE_GUESTS." WHERE timestamp < $timeout";
      mysql_query($q, $this->connection);
      $this->calcNumActiveGuests();
   }
   
   function query($query){ return mysql_query($query, $this->connection); }
};

$database = new MySQLDB;
?>
