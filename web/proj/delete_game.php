<?php include 'session.php';;

$game_id = $_GET["game_id"];

//echo '<h1>'.$score.'</h1>';
	$stmt = $db->prepare('DELETE FROM games WHERE game_id = ' . $game_id);
	$stmt->execute();
	header("location:home.php");
?>