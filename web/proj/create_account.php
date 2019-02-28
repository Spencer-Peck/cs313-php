<?php

include 'db_connect.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];


$statement = $db->prepare('SELECT user_id FROM users WHERE user_name = :username AND password = :password');
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->bindValue(':password', $password, PDO::PARAM_STR);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$count = count($results);


    if (isset($username) && isset($password) && $count == 0){
    $stmt = $db->prepare('INSERT INTO users (user_name, password, first_name, last_name) VALUES  (:username, :password, :firstname, :lastname)');
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