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
    foreach ($db->query('SELECT winner_name, score, session_description, date FROM game_session WHERE game_id = 1') as $row)
    {
        echo '<tr><td>' . $row['s.winner_name'] . '</td><td>' . $row['s.score'] . '</td>' .
        '<td>' . $row['s.winner_name'] . '</td><td>' . $row['s.session_description'] . '</td><td>' .
        $row['s.date'] . '</td></tr>';

    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>