<?php include 'header.php';?>

<div class="container">
  <h2>Games:</h2>
  <div class="list-group">

    <?php
    $user_id = $_SESSION['user_id'];
    foreach ($db->query('SELECT game_name, game_id FROM games WHERE user_id = ' . $user_id) as $row)
    {
        echo '<a href="viewGame.php?game_id=' . $row['game_id'] .'&name=' . $row['game_name'] . '"class="list-group-item list-group-item-action">' . $row['game_name'] . '<button type="button" class="btn btn-danger">Danger</button></a>';
    }

    ?>

  </div>
</div>

	
</body>
</html>