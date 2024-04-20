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
    $price = $_GET['price'] ?? 0.00;
    $adjustment = $_GET['adjustment'] ?? 0;
  ?>
  <main>
    <h1>Arithmetic average</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="price">Product price ($)</label>
      <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?=$price?>" value="<?=$price?>" required>
      <label for="year">What is the adjustment percentage? (<strong><span id="percentage">?</span>%</strong>)</label>
      <input type="range" name="adjustment" id="adjustment" min="0" max="100" step="1" oninput="changeValue()" value="<?=$adjustment?>">
      <input type="submit" value="Calculate">
    </form>
  </main>
  <section>
    <?php 
      $new_price = $price + ($price * $adjustment / 100);
    ?>
    <h2>Result</h2>
    <p>The price that was $<?=$price?>, increased by <strong><?=$adjustment?>%</strong> is going to cost <strong>$<?=number_format($new_price, 2, ".", ",")?></strong> from now on.</p>

  </section>
  <script>
    changeValue()

    function changeValue() {
      percentage.innerText = adjustment.value;
    }
  </script>
  
</body>
</html>