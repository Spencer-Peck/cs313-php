<?php include 'header.php';?>



<div class="container">
<h2><?php echo $_GET["name"];?></h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Winner Name</th>
        <th>Score</th>
        <th>Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    <?php
    $game_id = $_GET["game_id"];
    $name = $_GET["name"];
    foreach ($db->query('SELECT session_id, winner_name, score, session_description, date FROM game_session WHERE game_id =' . $game_id . ' ORDER BY date DESC') as $row)
    {
        echo '<tr><td>' . $row['winner_name'] . '</td><td>' . $row['score'] . '</td>' .
        '<td>' . $row['date'] . '</td>';
        echo '<td><button href="add_delete.php?game_id=$game_id&name=$name&session_id=' . $row['session_id'] .'&action=delete" type="button" class="btn btn-danger" data-toggle="confirmation">Delete</button></td></tr>';

    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>