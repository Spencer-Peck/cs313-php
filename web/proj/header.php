<!DOCTYPE html>
<html>
<head>
	<title>Spencer's Home</title>
	<style type="text/css"></style>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="path/to/jquery.js"></script>
<script type="text/javascript" src="path/to/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="path/to/bootstrap-confirmation.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 

</head>

<body>
<?php include 'session.php';
$username = $_SESSION['login_user'];
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];

?>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home.php">Score Keeper</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-user-circle" style="font-size:16px;"></i>&nbsp;<?php echo $firstname.' '.$lastname ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
</nav>