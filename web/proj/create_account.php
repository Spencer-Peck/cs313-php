<?php

include 'db_connect.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];


    if (isset($username) && isset($password)){
    $stmt = $db->prepare('INSERT INTO users (user_name, password) VALUES  (:username, :password)');
	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->execute();
	$_SESSION["create"] = TRUE;
	header("location:login_form.php");
      die();
}else{
	header("location:account_form.php");
      die();
}




?>