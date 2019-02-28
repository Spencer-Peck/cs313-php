<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="">Score Keeper</a>
  
  <!-- Links -->
</nav>


<div class="container">
  <h1>Create Account</h1>
  <br>
  <?php 
if (isset($_SESSION["accountExists"])) {
echo '<div class="alert alert-warning" role="alert">Account already exists</div>';
unset($_SESSION['ccountExists']); 

}?>
<form action="create_account.php" method="post">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name ="firstname" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name ="lastname" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="username">Create User Name</label>
    <input type="text" class="form-control" name ="username" id="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Create Password</label>
    <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Create Account</button>
</form>
</div>