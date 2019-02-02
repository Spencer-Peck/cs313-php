<?php include 'header.php';?>
<?php include 'order.php';?>

<?php
$game_id = $_GET["game_id"];
$name = $_GET["name"];
$add_form_url = 'add_score_form.php?game_id='.$game_id.'&name='.$name;

?>



<div class="container">
<h2><?php echo $_GET["name"];?> <div class="text-right"><a href=<?php echo '"'.$add_form_url.'"'; ?> class="btn btn-success " role="button" >Add Score</a></div></h2>            
  <table class="table table-striped" id="games">
    <thead>
      <tr>
        <th onclick="sortTable(0)">Winner Name </th>
        <th onclick="sortTable(1)">Score</th>
        <th onclick="sortTable(2)">Date</th>
        <th onclick="sortTable(3)">Sort By</th>
      </tr>
    </thead>
    <tbody>

    <?php
    foreach ($db->query('SELECT session_id, winner_name, score, session_description, date FROM game_session WHERE game_id =' . $game_id . ' ORDER BY date DESC') as $row)
    {
    	include 'score_fetch.php';
    }

    ?>
    </tbody>
  </table>
</div>



</body>
</html>