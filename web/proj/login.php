<?php include 'db_connect.php';

session_start();

$myusername = $_POST["username"];
$mypassword = $_POST["pwd"];
$count = 0;

$statement = $db->prepare('SELECT user_id FROM users WHERE user_name = :username AND password = :password');
$statement->bindValue(':username', $myusername, PDO::PARAM_STR);
$statement->bindValue(':password', $mypassword, PDO::PARAM_STR);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$val = $results[0]['user_id'];
$count = count($results);
//echo '<h1>'.$val.'</h1>';

if($count == 1) {
    $_SESSION['login_user'] = $myusername;
    $_SESSION['user_id'] = $val;
    header("location: home.php");
}else {
    $error = "Your Login Name or Password is invalid";
    header("location: login_form.php?error=true");

}





?>