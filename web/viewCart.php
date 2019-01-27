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
  $isPeanut = $_SESSION["peanut"];
  $isOatmeal = $_SESSION["oatmeal"];
  $isChip = $_SESSION["chip"];

  echo "<ul>";
  if ($isPeanut == true){
    echo "<li> Box of Peanut Butter Cookies <br>  Quantity: " . $_SESSION['qPeanut'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qPeanut"] * 3.99 . "</li>";
  }
  if ($isOatmeal == true){
    echo "<li> Box of Oatmeal Cookies <br>  Quantity: " . $_SESSION['qOatmeal'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qOatmeal"] * 4.99 . "</li>";
  }
  if ($isChip == true){
    echo "<li> Box of Chocolate Chip Cookies <br>  Quantity: " . $_SESSION['qChip'] . "<br> Subtotal: ";
    echo "$ " . $_SESSION["qChip"] * 3.45 . "</li>";
  }
  echo "</ul>";

  echo " <h1>Total: " . ($_SESSION["qChip"] * 3.45) + ($_SESSION["qPeanut"] * 3.45) + ($_SESSION["qOatmeal"] * 3.45 . "</h1>");

print_r($_SESSION);

  ?>



	
</body>
</html>