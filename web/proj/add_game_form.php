<?php include 'header.php';
?>
<div class="container-fluid">
	<h1>Add Game</h1><br>
<form action="add_game.php" method="post">
	<div class="form-group">
    <label for="game_name">Game Name:</label>
    <input type="text" name="game_name" class="form-control" id="game_name">
  </div>

  <button type="submit" class="btn btn-primary" value="Submit">Add Game</button>
</form>
</div>


</body>
</html>