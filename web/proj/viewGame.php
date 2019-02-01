<?php include 'header.php';?>



<div class="container">
<h2><?php echo $_GET["name"];?></h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Winner Name</th>
        <th>Score</th>
        <th>Game Notes</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $game_id = $_GET["game_id"];
    foreach ($db->query('SELECT winner_name, score, session_description, date FROM game_session WHERE game_id =' . $game_id . ' ORDER BY date DESC') as $row)
    {
        echo '<tr><td>' . $row['winner_name'] . '</td><td>' . $row['score'] . '</td>' .
        '<td>' . $row['session_description'] . '</td><td>' . $row['date'] . '</td>';
        echo '<td><button type="button" class="btn btn-danger">Delete</button></td></tr>';

    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>