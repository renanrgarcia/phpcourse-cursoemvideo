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
    <h1>Currency converter v2.0</h1>
    <p>
      <?php 
        $start = date('m-d-Y', strtotime('-7 days'));
        $end = date('m-d-Y');

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $start . '\'&@dataFinalCotacao=\'' . $end . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $quotation = $dados['value'][0]['cotacaoCompra'];

        $brls = $_GET["brls"] ?? 0;
        $dollars = ($brls / $quotation);

        // International notation
        $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $brls = numfmt_format_currency($pattern, $brls, "BRL");
        $dollars = numfmt_format_currency($pattern, $dollars, "USD");
        $quotation = numfmt_format_currency($pattern, $quotation, "BRL");

        echo "Your $brls is equal to <strong>$dollars</strong>* <br>";
        echo "*Quotation directly obtained from the website of the <strong>Central Bank of Brazil</strong> <br>";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05 Back</a></button>
  </main>
</body>
</html>