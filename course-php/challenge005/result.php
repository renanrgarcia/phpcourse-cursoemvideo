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
        $number = $_GET["number"] ?? 0;
        
        $number_int = number_format($number, 0, ",", ".");
        $number_dec = floatval($number);

        echo "Analysing the number <strong>$number</strong> informed by the user:  <br>";
        echo "<ul>
        <li>The integer part of the number is $number_int </li>
        </ul>*Quotation directly obtained from the website of the <strong>Central Bank of Brazil</strong> <br>";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05 Back</a></button>
  </main>
</body>
</html>