<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <pre>
      <?php 
        echo "<h1>Superglobal GET</h1>";
        print_r($_GET);
        echo "<br>";
        var_dump($_GET);

        echo "<h1>Superglobal POST</h1>";
        print_r($_POST);
        echo "<br>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        print_r($_REQUEST);
        echo "<br>";
        var_dump($_REQUEST);
        
      ?>
    </pre>
  </main>
</body>
</html>