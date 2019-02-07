<?php include 'header.php';?>




<div class="container">
    <h1>Games <div class="text-right"><a href="add_game_form.php" class="btn btn-success " role="button" >Add Game</a></div></h1>

  <table class="table" id="games">
    <thead>
      <tr>
        <th>View Score</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $user_id = $_SESSION['user_id'];
    foreach ($db->query('SELECT game_name, game_id, game_img FROM games WHERE user_id = ' . $user_id) as $row)
    {
        echo '<tr><td><a href="viewGame.php?game_id=' . $row['game_id'] .'&name=' . $row['game_name'] . '"class="list-group-item list-group-item-action">' . $row['game_name'] . '</a></td><img src="'.$row['game_img'].'" class="img-fluid img-thumbnail" width="104" height="36"></td><td> <a href="delete_game.php?game_id='.$row['game_id'].'" role="button" class="btn btn-danger">Delete</a></td></tr>';
    }

    ?>
    </tbody>
  </table>
</div>

	
</body>
</html>