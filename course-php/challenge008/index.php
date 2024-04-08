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
    $number = $_GET['number'] ?? 1;
  ?>
  <main>
    <h1>Enter a number</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="sallary">Number</label>
      <input type="text" name="number" id="number" value="<?=$number?>" step=0.01>
      <input type="submit" value="Calculate roots">
    </form>
  </main>
  <section>
    <h2>Final result</h2>
    <p>The roots of the <strong>number <?=number_format($number, 3, '.', ',')?></strong> are:</p>
    <ul>
      <li>The square root is <?=number_format(sqrt($number), 3, '.', ',')?></li>
      <li>The cubic root is <?=number_format(pow($number, 1.0/3.0), 3, '.', ',') ?></li>
    </ul>
  </section>
  
</body>
</html>