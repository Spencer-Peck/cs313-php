<?php
   session_start();
   
   if(session_destroy()) {
   	session_unset();     // unset $_SESSION variable for the run-time 
      header("Location: login.php");
   }
?>