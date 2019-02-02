<?php include 'header.php';?>

<div class="container">
  <h2>Games: <?php $date = date("Y-m-d"); echo $date;?></h2>
  <div class="list-group">

    <?php
    foreach ($db->query('SELECT game_name, game_id FROM games') as $row)
    {
        echo '<a href="viewGame.php?game_id=' . $row['game_id'] .'&name=' . $row['game_name'] . '"class="list-group-item list-group-item-action">' . $row['game_name'] . '</a>';
    }

    ?>

  </div>
</div>

	
</body>
</html>