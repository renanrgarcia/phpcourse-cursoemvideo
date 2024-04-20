<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minimum wage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $number1 = $_GET['number1'] ?? 0;
    $wheight1 = $_GET['wheight1'] ?? 1;
    $number2 = $_GET['number2'] ?? 0;
    $wheight2 = $_GET['wheight2'] ?? 1;
  ?>
  <main>
    <h1>Arithmetic average</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="number1">First Number</label>
      <input type="number" name="number1" id="number1" value="<?=$number1?> required">
      <label for="wheight1">First Wheight</label>
      <input type="number" name="wheight1" id="wheight1" min="1" value="<?=$wheight1?> required">
      <label for="number2">Second Number</label>
      <input type="number" name="number2" id="number2"  value="<?=$number2?> required">
      <label for="wheight2">Second Wheight</label>
      <input type="number" name="wheight2" id="wheight2" min="1" value="<?=$wheight2?> required">
      <input type="submit" value="Calculate averages">
    </form>
  </main>
  <section>
    <?php 
      $simple_avg = ($number1 + $number2) / 2;
      $pondered_avg = ($number1 * $wheight1 + $number2 * $wheight2) / ($wheight1 + $wheight2)
    ?>
    <h2>Averages calculated</h2>
    <p>Analysing the numbers <?=$number1?> and <?=$number2?>:</p>
    <ul>
      <li>The <strong>Simple Arithmetic Average</strong> between them is <?=number_format($simple_avg, 2, '.', ',')?>.</li>
      <li>The <strong>Pondered Arithmetic Average</strong> with wheights <?=$wheight1?> and <?=$wheight2?> is equal to <?=number_format($pondered_avg, 2, '.', ',')?>.</li>
    </ul>
  </section>
  
</body>
</html>