<?php
include 'db_connect.php';

$user_check = $_SESSION['login_user'];
$statement = $db->prepare('SELECT user_name FROM users WHERE user_name = :username');
$statement->bindValue(':username', $user_check, PDO::PARAM_STR);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$login_session = $results[0]['user_name'];

if(!isset($_SESSION['login_user'])){
      header("location:login_form.php");
      die();
   }


   if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    session_start();
    $_SESSION['expired'] = TRUE;
}
 // update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();



?>