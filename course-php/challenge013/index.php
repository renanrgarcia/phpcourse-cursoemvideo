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
      $money = $_GET['money'] ?? 1;
    ?>
    <main>
      <h1>Cash machine</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="money">How much money do you need? ($)*</label>
        <input type="number" name="money" id="seconds" min="1" value="<?=$seconds?>" required>
        <p>* Cedules available: $100, $50, $10 and $5</p>
        <input type="submit" value="Calculate">
      </form>
    </main>
    <section>
      <?php 
        $remaining_money = $money;

        $hundred = floor($money / 100);
        $remaining_money %= 100;
        
        $fifty = floor($remaining_money / 50);
        $remaining_money %= 50;

        $ten = floor($remaining_money / 10);
        $remaining_money %= 10;

        $five = floor($remaining_money / 5);

      ?>
      <h2>Withdraw of $<?=number_format($money, 2, '.', ',') ?></h2>
      <p>The cash machine will give you:</p>
      <ul>
        <li><img src="images/100.jpg" alt="100"> x <?=$hundred?></li>
        <li><img src="images/50.jpg" alt="50"> x <?=$fifty?></li>
        <li><img src="images/10.jpg" alt="10"> x <?=$ten?></li>
        <li><img src="images/5.jpg" alt="5"> x <?=$five?></li>
      </ul>

    </section>  
  </body>
</html>