<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    $firstFile = fopen('a.txt', "r+");

    $line = fgets($firstFile);
    echo $line;

    while (!feof($firstFile)) {
      echo "\n" . fgets($firstFile);
    }

    echo "<br />";
    echo "<br />";
    $k = "o";


  ?>
</body>
</html>
