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
    <h1>Currency converter v1.0</h1>
    <p>
      <?php 
        $brls = $_GET["brls"] ?? 0;
        $quotation = 5.22;
        $dollars = ($brls / $quotation);

        // $quotation = number_format($quotation, 2, ",", ".");
        // $brls = number_format($brls, 2, ",", ".");
        // $dollars = number_format($dollars, 2, ",", ".");

        // International notation
        $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $brls = numfmt_format_currency($pattern, $brls, "BRL");
        $dollars = numfmt_format_currency($pattern, $dollars, "USD");
        $quotation = numfmt_format_currency($pattern, $quotation, "BRL");

        echo "Your $brls is equal to <strong>$dollars</strong> <br>";
        echo "<strong>*The fix quotation is $quotation </strong> informed directly from the code. <br>";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05 Back</a></button>
  </main>
</body>
</html>