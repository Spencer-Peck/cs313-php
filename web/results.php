<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
</head>
<body>
  <?php $email = $_POST["email"]; ?>

  Name <?php echo $_POST["name"]; ?><br>
  Email <?php echo "<a href = 'mailto: $email'>$email</a>" ?><br>
  Major: <?php echo $_POST["majors"]; ?><br>
  Comments: <?php echo $_POST["comments"]; ?><br>
	
</body>
</html>