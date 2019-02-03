<?php include 'db_connect.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $myusername = pg_escape_string($_POST['username']);
     $mypassword = pg_escape_string($_POST['password']);

     $stmt->bindValue(':username', $myusername, PDO::PARAM_STR);
     $stmt->bindValue(':password', $mypassword, PDO::PARAM_STR);

     $statement = $db->query('SELECT user_id FROM users WHERE user_name = :username AND password = :password');
     $results = $statement->fetchAll(PDO::FETCH_ASSOC);
     $count = pg_num_rows($results);

     if($count == 1) {
     	$_SESSION['login_user'] = $myusername;
     	$_SESSION['user_id'] = $row['user_id']
     	header("location: home.php");
     }else {
         $error = "Your Login Name or Password is invalid";
         header("location: login_form.php?error=true");

      }
}




?>