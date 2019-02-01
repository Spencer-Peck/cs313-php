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
  <script src="path/to/jquery.js"></script>
  <script src="path/to/popper.js"></script>
  <script src="path/to/bootstrap.js"></script>
  <script src="path/to/bootstrap-confirmation.js"></script>
</head>
<body>
<?php include 'https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js';?>
<?php include 'db_connect.php';?>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home.php">Score Keeper</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Add/Edit Games</a>
    </li>
  </ul>
</nav>