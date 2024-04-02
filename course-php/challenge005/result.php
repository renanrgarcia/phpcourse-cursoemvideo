<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <main>
    <h1>Real number analyser</h1>
    <p>
      <?php 
        $number = $_POST["number"] ?? 0;
        
        $number_int = (int) $number;
        $number_dec = $number - $number_int;

        echo "Analysing the number <strong>" . number_format($number, 3, ".", ",") . "</strong> informed by the user:  <br>";
        echo "<ul>
        <li>The integer part of the number is <strong>" . number_format($number_int, 0, ".", ",") . "</strong> </li>
        <li>The decimal part of the number is <strong>" . number_format($number_dec, 3, ".", ",") . "</strong> </li>
        </ul>";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">Back</a></button>
  </main>
</body>
</html>