<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constants and variables</title>
</head>
<body>
  <?php 
    $name = "Renan"; # variable, can change 
    $last_name = "Garcia";
    const COUNTRY = "Brazil"; # constant, cannot change

    echo "Glad to meet you, $name $last_name! You live at " . COUNTRY;
  ?>
</body>
</html>