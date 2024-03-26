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
    <h1>Final result</h1>
    <p>
      <?php 
        $number = $_GET["number"] ?? 0;
        $pre_number = $number - 1;
        $suc_number = $number + 1;

        echo "The chosen number was <strong>$number</strong> <br>";
        echo "The predecessor number is $pre_number <br>";
        echo "The successor number is $suc_number";
      ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05 Back</a></button>
  </main>
</body>
</html>