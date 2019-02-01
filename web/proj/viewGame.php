<?php include 'header.php';?>
<?php include 'order.php';?>


<div class="container">
<h2><?php echo $_GET["name"];?></h2>            
  <table class="table table-striped" id="games">
    <thead>
      <tr>
        <th onclick="sortTable(0)">Winner Name <a href="#" class="btn btn-success " role="button" >Add New</a></th>
        <th onclick="sortTable(1)">Score</th>
        <th onclick="sortTable(2)">Date</th>
        <th onclick="sortTable(3)">Sort By</th>
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
        echo '<td><a href="add_delete.php?game_id='.$game_id.'&name='.$name.'&session_id=' . $row['session_id'] .'&action=delete" role="button" class="btn btn-danger">Delete</a></td></tr>';

    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>