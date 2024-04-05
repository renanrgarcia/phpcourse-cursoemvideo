<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $value1 = $_GET['v1'] ?? 0;
    $value2 = $_GET['v2'] ?? 0;
  ?>
  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="v1">Value 1</label>
      <input type="number" name="v1" id="v1" value="<?=$value1?>">
      <label for="v2">Value 2</label>
      <input type="number" name="v2" id="v2" value="<?=$value2?>">
      <input type="submit" value="Calculate">
    </form>
  </main>
  <section id="result">
    <h2>Sum result</h2>
    <?php 
      $sum = $value1 + $value2;
      print "The result of the sum of $value1 and $value2 is <strong>$sum</strong>."
    ?>
  </section>
</body>
</html>