<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #c47a36;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #663203;
  padding: 10px;
}
	</style>
</head>
<body>

<?php
if (!isset($_SESSION["peanut"]))
	$_SESSION["peanut"] = "false";
if (!isset($_SESSION["oatmeal"]))
	$_SESSION["oatmeal"] = "false";
if (!isset($_SESSION["chip"]))
	$_SESSION["chip"] = "false";
if (!isset($_SESSION["qPeanut"]))
	$_SESSION["qPeanut"] = 0;
if (!isset($_SESSION["qOatmeal"]))
	$_SESSION["qOatmeal"] = 0;
if (!isset($_SESSION["qChip"]))
	$_SESSION["qChip"] = 0;
?>


<div class="center">
	<center><h1>The Best Cookies</h1> <a href="viewCart.php">View Cart</a></center>
</div>
<form action="addCart.php" method="post">
<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#663203">Peanut Butter</li>
    <li class="grey">$ 3.99 per box</li>
    <li><img src="https://www.modernhoney.com/wp-content/uploads/2018/10/Soft-Chewy-Peanut-Butter-Cookies-4-cr.jpg" alt="Chocolate chip" style="width:350px;height:200px;"></li>
    <li>Quantity<input type="number" name = "qPeanut" id="myNumber" value="1"></li>
    <li class="grey"><button name = "cart"  type="submit" class="button" value = "peanut">Add to cart</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#c47a36">Oatmeal</li>
    <li class="grey">$ 4.99 per box</li>
    <li><img src="https://i2.wp.com/www.livewellbakeoften.com/wp-content/uploads/2017/01/Soft-and-Chewy-Oatmeal-Raisin-Cookies-3.jpg?resize=1360%2C2040" alt="Chocolate chip" style="width:350px;height:200px;"></li>
    <li>Quantity<input type="number" id="myNumber" value="1"></li>
    <li class="grey"><button name = "cart"  type="submit" class="button" value = "oatmeal">Add to cart</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#663203">Chocolate Chip</li>
    <li class="grey">$ 3.45 per box</li>
    <li><img src="https://www.handletheheat.com/wp-content/uploads/2018/02/BAKERY-STYLE-CHOCOLATE-CHIP-COOKIES-9.jpg" alt="Chocolate chip" style="width:350px;height:200px;"></li>
    <li>Quantity<input type="number" id="myNumber" value="1"></li>
    <li class="grey"><button name = "cart"  type="submit" class="button" value = "chip">Add to cart</li>
  </ul>
</div>
</form>
	
</body>
</html>