<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primitive types</title>
</head>
<body>
  <h1>Primitive types tests</h1>
  <?php 
    $vector = [1, 2, 3];
    var_dump($vector);
    echo "<br>";

    class Person {
      private string $name;
    }

    $p = new Person;
    var_dump($p)
  ?>
</body>
</html>