<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>

  <?php
  
  $myCart = $_POST["cart"];

  if ($myCart == "peanut"){
  	$_SESSION["peanut"] = "true";
  	$_SESSION["qPeanut"] = $_POST["qPeanut"];
  	echo $_SESSION["qPeanut"];
  }

  if ($myCart == "chip"){
  	$_SESSION["chip"] = "true";
  	

  }

  if ($myCart == "oatmeal"){
  	$_SESSION["oatmeal"] = "true";
  	

  }
  header( 'Location: browse.php' ) ;


  ?>
	
</body>
</html>