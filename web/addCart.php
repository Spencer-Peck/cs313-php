<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>

  cart <?php echo $_POST["cart"]; ?><br>

  <?php
  $myCart = $_POST["cart"];

  if ($myCart == "peanut"){
  	$_SESSION["peanut"] = "true";
  	echo $_POST["cart"];
  }

  if ($myCart == "chip"){
  	$_SESSION["chip"] = "true";
  	echo $_POST["cart"];

  }

  if ($myCart == "oatmeal"){
  	$_SESSION["oatmeal"] = "true";
  	echo $_POST["cart"];

  }



  ?>
	
</body>
</html>