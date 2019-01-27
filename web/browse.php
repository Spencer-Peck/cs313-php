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
  background-color: #4CAF50;
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
<div class="center">
	<center><h1>The Best Cookies</h1></center>
</div>
<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 3.99</li>
    <li><img src="https://www.handletheheat.com/wp-content/uploads/2018/02/BAKERY-STYLE-CHOCOLATE-CHIP-COOKIES-9.jpg" alt="Chocolate chip" style="width:400px;height:200px;"></li>
    <li class="grey">Quantity<input type="number" id="myNumber" value="1"><a href="#" class="button">Add to cart</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Pro</li>
    <li class="grey">$ 4.99</li>
    <li><img src="https://www.handletheheat.com/wp-content/uploads/2018/02/BAKERY-STYLE-CHOCOLATE-CHIP-COOKIES-9.jpg" alt="Chocolate chip" style="width:400px;height:200px;"></li>
    <li class="grey">Quantity<input type="number" id="myNumber" value="1"><a href="#" class="button">Add to cart</a> </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Chocolate Chip</li>
    <li class="grey">$ 3.45</li>
    <li><img src="https://www.handletheheat.com/wp-content/uploads/2018/02/BAKERY-STYLE-CHOCOLATE-CHIP-COOKIES-9.jpg" alt="Chocolate chip" style="width:400px;height:200px;"></li>

    <li class="grey">Quantity<input type="number" id="myNumber" value="1"><a href="#" class="button">Add to cart</a></li>
  </ul>
</div>
	
</body>
</html>