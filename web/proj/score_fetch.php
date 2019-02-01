
<?php
echo '<a href="#demo" data-toggle="collapse"><tr>';
echo '<td>' . $row['winner_name'] . '</td><td>' . $row['score'] . '</td>' . '<td>' . $row['date'] . '</td>';
echo '<td><a href="add_delete.php?game_id='.$game_id.'&name='.$name.'&session_id=' . $row['session_id'] .'&action=delete" role="button" class="btn btn-danger">Delete</a></td></tr>';
echo '<tr class="collapse">'. row['session_description'] . '</tr><a>';
?>