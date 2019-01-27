<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>
  <center><h1>Your Cart</h1></center>

  <?php
  echo "<ul>";
  if ($_SESSION["peanut"] == true){
    echo "<li> Box of Peanut Butter Cookies <br>  Quantity: " . $_SESSION['qPeanut'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qPeanut"] * 3.99 . "</li>";
  }
  echo "</ul>";


  ?>

  peanut <?php echo $_SESSION["qPeanut"]; ?><br>


	
</body>
</html>