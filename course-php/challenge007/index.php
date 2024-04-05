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
    $minwage = 1_412.00;
    $sallary = $_GET['sallary'] ?? 0;
  ?>
  <main>
    <h1>Division anatomy</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="sallary">Sallary ($)</label>
      <input type="text" name="sallary" id="sallary" value="<?=$sallary?>" step=0.01>
      <p>Considerating the minimum wage of <strong>$<?=number_format($minwage, 2, '.', ',')?></strong></p>
      <input type="submit" value="Calculate">
    </form>
  </main>
  <section>
    <h2>Final result</h2>
    <?php 
      $intminwages = intdiv($sallary, $minwage);
      $rest = $sallary % $minwage;

      echo "Who receives a sallary of \$" . number_format($sallary, 2, '.', ',') . " receives <strong>" . $intminwages . " minimum wages</strong> + \$" . number_format($rest, 2, '.', ',') . "."
    ?>
    
  </section>
  
</body>
</html>