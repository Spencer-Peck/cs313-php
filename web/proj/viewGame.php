<?php include 'header.php';?>



<div class="container">            
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
    foreach ($db->query('SELECT winner_name, score, session_description, date FROM game_session ORDER BY date WHERE game_id =' . $game_id) as $row)
    {
        echo '<tr><td>' . $row['winner_name'] . '</td><td>' . $row['score'] . '</td>' .
        '<td>' . $row['session_description'] . '</td><td>' . $row['date'] . '</td></tr>';

    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>