<?php include 'db_connect.php';

session_start();

$myusername = $_POST["username"];
$mypassword = $_POST["pwd"];
$count = 0;

$statement = $db->prepare('SELECT user_id, first_name, last_name FROM users WHERE LOWER(user_name) = LOWER(:username) AND password = :password');
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
    $_SESSION['first_name'] = $results[0]['first_name'];
    $_SESSION['last_name'] = $results[0]['last_name'];
    $_SESSION['LAST_ACTIVITY'] = time();
    header("location: home.php");
}else {
    $error = "Your Login Name or Password is invalid";
    $_SESSION['incorrect'] = TRUE;
    header("location: login_form.php?error=true");

}





?>