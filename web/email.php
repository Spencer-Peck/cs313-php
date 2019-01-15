<?php
$to = $_GET["to"];
$from = $_GET["from"];
$subject = $_GET["subject"];
$text = $_GET["text"];
$num = $_GET["num"];

for ($x = 0; $x <= $num; $x++)
{
    mail ($to, $subject, $text);
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p> message sent to <?php print "$to $num"?> times</p>
</body>
</html>