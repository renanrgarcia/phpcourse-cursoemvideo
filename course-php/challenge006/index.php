<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Division anatomy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $dividend = $_GET['dividend'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
  ?>
  <main>
    <h1>Division anatomy</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="dividend">Dividend</label>
      <input type="text" name="dividend" id="dividend" value="<?=$dividend?>">
      <label for="dividend">Divisor</label>
      <input type="text" id="dividend" name="divisor" value="<?=$divisor?>">
      <input type="submit" value="Analyse">
    </form>
  </main>
  <section>
    <h2 style="text-align: left;">Division structure</h2>
    <?php 
      $module = $dividend % $divisor;
      $quocient = intdiv($dividend, $divisor);
    ?>  

    <table class="divisao">
      <tr>
        <td><?=$dividend?></td>
        <td><?=$divisor?></td>
      </tr>
      <tr>
        <td><?=$module?></td>
        <td><?=$quocient?></td>
      </tr>
    </table>
  </section>
  
</body>
</html>