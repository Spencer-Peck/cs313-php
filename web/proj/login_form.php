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

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home.php">Score Keeper</a>
  
  <!-- Links -->
</nav>


<div class="container-fluid">
  <h1>Login</h1>
  <br>
  <br>
<form action="login.php" method="post">
  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" name ="username id="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="">Create Account</a>
</div>

</body>
</html>