<?php include 'db_connect.php';

$action = $_GET["action"];
$name = $_GET["name"];
$game_id = $_GET["game_id"];
if ($action = delete){
	$session_id = $_GET["session_id"];
	$stmt = $db->prepare('DELETE FROM game_session WHERE session_id = ' . $session_id);
	$stmt->execute();
}
$page = "viewGame.php?game_id=$game_id&name=$name";

header("location: $page");
die();

?>