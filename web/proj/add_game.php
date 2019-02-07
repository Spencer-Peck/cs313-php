<?php

include 'session.php';

    $game_name = $_POST["game_name"];
    $user_id = $_SESSION['user_id'];
    $game_img = $_POST["game_pic"];


    $stmt = $db->prepare('INSERT INTO games (user_id, game_name, game_img) VALUES  (:user_id, :game_name, :game_img)');
	$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
	$stmt->bindValue(':game_name', $game_name, PDO::PARAM_STR);
	$stmt->bindValue(':game_img', $game_img, PDO::PARAM_STR);
	$stmt->execute();

	header("location:home.php");

?>