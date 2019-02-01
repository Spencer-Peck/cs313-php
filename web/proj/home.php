<?php include 'header.php';?>

<div class="container">
  <h2>Games:</h2>
  <div class="list-group">

    <?php
    foreach ($db->query('SELECT game_name FROM games') as $row)
    {
        echo '<a href="#" class="list-group-item list-group-item-action">' . $row['game_name'] . '</a>';
    }

    ?>

  </div>
</div>

	
</body>
</html>