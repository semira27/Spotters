<?php
/*define("DB_SERVER", "localhost");
define("DB_USER", "digita11_spotter");
define("DB_PASS", "spotters123");
define("DB_NAME", "digita11_spotters");*/

error_reporting( 0 );

define("DB_SERVER", "localhost");
define("DB_USER", "spo34079_spotter");
define("DB_PASS", "lozinka");
define("DB_NAME", "spo34079_spotters");

define("TBL_USERS", "users");
define("TBL_ACTIVE_USERS",  "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS",  "banned_users");


define("ADMIN_NAME", "admin");
define("GUEST_NAME", "Guest");
define("ADMIN_LEVEL", 9);
define("SC_LEVEL",  3);
define("CRANE_LEVEL", 2);
define("SPOTTERS_LEVEL", 1);
define("GUEST_LEVEL", 0);

define("TRACK_VISITORS", false);
define("USER_TIMEOUT", 10);
define("GUEST_TIMEOUT", 5);
define("COOKIE_EXPIRE", 60*60*24*100);
define("COOKIE_PATH", "/");
define("EMAIL_FROM_NAME", "Spotters site");
define("EMAIL_FROM_ADDR", "youremail@address.com");
define("EMAIL_WELCOME", false);
define("ALL_LOWERCASE", false);
?>
