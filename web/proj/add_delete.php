<?php include 'session.php';;

$action = $_GET["action"];
$name = $_GET["name"];
$game_id = $_GET["game_id"];
$winner = $_POST["win_name"];
$score = $_POST["score"];
$theDate = date("Y-m-d");
//echo '<h1>'.$score.'</h1>';
if ($action == 'delete'){
	$session_id = $_GET["session_id"];
	$stmt = $db->prepare('DELETE FROM game_session WHERE session_id = ' . $session_id);
	$stmt->execute();
}

if ($action == 'add'){
	$stmt = $db->prepare('INSERT INTO game_session (game_id, winner_name, score, date, ) VALUES  (:game_id, :winner, :score, :adate);');
	$stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
	$stmt->bindValue(':winner', $winner, PDO::PARAM_STR);
	$stmt->bindValue(':score', $score, PDO::PARAM_STR);
	$stmt->bindValue(':adate', $theDate, PDO::PARAM_STR);
	$stmt->execute();
}



$page = "viewGame.php?game_id=$game_id&name=$name";

header("location: $page");
die();

?>