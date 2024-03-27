<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Processing result</h1>
  </header>
  <main>
    <?php 
      $name = $_GET["name"] ?? "Nome";
      $lastname = $_GET["lastname"] ?? "desconhecido";
      echo "Nice to meet you, <strong>$name $lastname</strong>! This is my site!"
    ?>
    <p><a href="javascript:history.go(-1)">Back to previous page</a></p>
  </main>
</body>
</html>