<?php

include 'db_connect.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $_SESSION['first_name'] = $_POST['firstname'];
    $_SESSION['last_name'] = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];


    if (isset($username) && isset($password)){
    $stmt = $db->prepare('INSERT INTO users (user_name, password) VALUES  (:username, :password)');
	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
	$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
	$stmt->execute();
	$_SESSION["create"] = TRUE;
	header("location:login_form.php");
}else{
	header("location:account_form.php");
}




?>