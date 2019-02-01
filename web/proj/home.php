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
</head>
<body>

<?php  

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Score Keeper</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Add/Edit Games</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Add/Edit Sessions</a>
    </li>
  </ul>
</nav>

<div class="container">
  <h2>Games:</h2>
  <div class="list-group">

    <?php
    foreach ($db->query('SELECT game_name FROM games') as $row)
    {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $row['game_name'] . '</a>'
    }

    ?>
    
  </div>
</div>

	
</body>
</html>