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
  if ($_SESSION["oatmeal"] == true){
    echo "<li> Box of Oatmeal Cookies <br>  Quantity: " . $_SESSION['qOatmeal'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qOatmeal"] * 4.99 . "</li>";
  }
  if ($_SESSION["chip"] == true){
    echo "<li> Box of Chocolate Chip Cookies <br>  Quantity: " . $_SESSION['qChip'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qChip"] * 3.45 . "</li>";
  }
  echo "</ul>";

  echo "Total: " . ($_SESSION["qChip"] * 3.45) + ($_SESSION["qPeanut"] * 3.45) + ($_SESSION["qOatmeal"] * 3.45);


  ?>



	
</body>
</html>