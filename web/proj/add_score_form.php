<?php include 'header.php';
$name = $_GET["name"];
?>
<div class="container-fluid">
<form action=<?php echo '"add_delete.php?game_id='.$_GET["game_id"].'&action=add&name='.$name.'"';?> method="post">
	<div class="form-group">
    <label for="win_name">Name:</label>
    <input type="text" name="win_name" class="form-control" id="win_name">
  </div>
  <div class="form-group">
    <label for="score">Score:</label>
    <input type="text" name="score" class="form-control" id="score">
  </div>
  <button type="submit" class="btn btn-primary" value="Add Score">Submit</button>
</form>
</div>


</body>
</html>