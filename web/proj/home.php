<?php include 'header.php';?>




<div class="container">
    <h1>Games</h1>

  <table class="table" id="games">
    <thead>
      <tr>
        <th>Name </th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $user_id = $_SESSION['user_id'];
    foreach ($db->query('SELECT game_name, game_id FROM games WHERE user_id = ' . $user_id) as $row)
    {
        echo '<tr><td><a href="viewGame.php?game_id=' . $row['game_id'] .'&name=' . $row['game_name'] . '"class="list-group-item list-group-item-action">' . $row['game_name'] . '</a></td><td> <a href="" role="button" class="btn btn-danger">Delete</a></td></tr>';
    }

    ?>
    </tbody>
  </table>
</div>

	
</body>
</html>