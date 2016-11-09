<!DOCTYPE html>
<html>
<head>
	<title>Your bun choice</title>
</head>
<body>
  <h1>Your rabbit</h1>

  <?php

   $rabbit = $_POST['selType'];

   $gender = $_POST['gender'];

   echo "You've chosen a $gender $rabbit. How cute!";

  ?>
</body>
</html>