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
      $seconds = $_GET['seconds'] ?? 1;
    ?>
    <main>
      <h1>Time Calculator</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="price">How many seconds in total?</label>
        <input type="number" name="seconds" id="seconds" min="1" value="<?=$seconds?>" required>
        <input type="submit" value="Calculate">
      </form>
    </main>
    <section>
      <?php 
        $weeks = floor($seconds / (7 * 24 * 3600));
        $remainingSeconds = $seconds % (7 * 24 * 3600);
        
        $days = floor($remainingSeconds / (24 * 3600));
        $remainingSeconds %= (24 * 3600);
    
        $hours = floor($remainingSeconds / 3600);
        $remainingSeconds %= 3600;
    
        $minutes = floor($remainingSeconds / 60);
        $remainingSeconds %= 60;

        $just_seconds = $remainingSeconds;
      ?>
      <h2>Result</h2>
      <p><strong><?=number_format($seconds, 0, '.', ',')?> seconds</strong> is equal to:</p>
      <ul>
        <li><?=$weeks?> weeks</li>
        <li><?=$days?> days</li>
        <li><?=$hours?> hours</li>
        <li><?=$minutes?> minutes</li>
        <li><?=$just_seconds?> seconds</li>
      </ul>

    </section>  
  </body>
</html>