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
    $birth_year = $_GET['birth_year'] ?? 0;
    $year = $_GET['year'] ?? 0;
    $present_year = date("Y");
  ?>
  <main>
    <h1>Age</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="birth_year">What is your year of birth?</label>
      <input type="number" name="birth_year" id="birth_year" max="<?=$present_year?>" value="<?=$birth_year?>" required>
      <label for="year">Do you want to know in which year? (Actually we are in <?=$present_year?>)</label>
      <input type="number" name="year" id="year" value="<?=$present_year?>" required>
      <input type="submit" value="Calculate age">
    </form>
  </main>
  <section>
    <?php 
      $age = $year - $birth_year
    ?>
    <h2>Result</h2>
    <p>Who born in <?=$birth_year?> is going to be <strong><?=$age?> years old</strong> in <?=$present_year?>!</p>
  </section>
  
</body>
</html>