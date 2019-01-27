<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>

  cart <?php echo $_POST["qPeanut"]; ?><br>

  <?php
  

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



  ?>
	
</body>
</html>