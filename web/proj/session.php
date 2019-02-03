<?php
include 'db_connect.php';
session_start();
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



?>