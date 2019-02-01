<?php include 'header.php';?>

<div class="container">
  <h2>Games:</h2>
  <div class="list-group">

    <?php
    foreach ($db->query('SELECT game_name, game_id FROM games') as $row)
    {
        echo '<a href="viewGame.php?game_id=' . $row['game_id'] . '"class="list-group-item list-group-item-action">' . $row['game_name'] . '</a>';
    }

    ?>

  </div>
</div>

	
</body>
</html>