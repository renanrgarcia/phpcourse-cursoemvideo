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
        $number = random_int(0, 100);
        
        echo "Generating a random number between 0 and 100... <br>";
        echo "The generated number is <strong>$number</strong>";
      ?>
    </p>
    <button onclick="javascript:location.reload()">&#x2B05 Generate other</a></button>
  </main>
</body>
</html>