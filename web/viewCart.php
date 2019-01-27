<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>
  <center><h1>Your Cart</h1/center>

  <?php
  echo "<ul>";
  if ($_SESSION["peanut"]){
    echo "<li> Box of Peanut Butter Cookies  Quantity: $_SESSION['qPeanut'] <br> subtotal: ";
    echo "$ " . $_SESSION["qPeanut"] * 3.99;
  }
  echo "</ul>";


  ?>

  peanut <?php echo $_SESSION["qPeanut"]; ?><br>


	
</body>
</html>