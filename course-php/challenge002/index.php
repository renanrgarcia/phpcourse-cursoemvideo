<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <main>
    <h1>Working with random numbers</h1>
    <p>
      <?php 
        $min = 0;
        $max = 100;
        $number = mt_rand($min, $max);
        
        echo "Generating a random number between $min and $max... <br>";
        echo "The generated number is <strong>$number</strong>";
      ?>
    </p>
    <button onclick="javascript:location.reload()">&#x1F504 Generate other</a></button>
  </main>
</body>
</html>