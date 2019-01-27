<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>

  cart <?php echo $_POST["cart"]; ?><br>

  <?php
  if ($_POST["cart"] == "peanut"){
  	$_SESSION["peanut"] = "true";
  	echo $_POST["cart"]
  }

  if ($_POST["cart"] == "chip"){
  	$_SESSION["chip"] = "true";
  	echo $_POST["cart"]

  }

  if ($_POST["cart"] == "oatmeal"){
  	$_SESSION["oatmeal"] = "true";
  	echo $_POST["cart"]

  }



  ?>
	
</body>
</html>