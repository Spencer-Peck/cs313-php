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
  }

  if ($myCart == "chip"){
  	$_SESSION["chip"] = "true";
  	$_SESSION["qChip"] = $_POST["qChip"];

  }

  if ($myCart == "oatmeal"){
  	$_SESSION["oatmeal"] = "true";
  	$_SESSION["qOatmeal"] = $_POST["qOatmeal"];

  }
  header( 'Location: browse.php' ) ;


  ?>
	
</body>
</html>