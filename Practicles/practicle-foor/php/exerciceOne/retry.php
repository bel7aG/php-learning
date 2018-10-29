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
    $myFile = fopen("bel7aG.txt", "a+");
    fwrite($myFile, "bel7aG is a javascript Developer\n");
    fwrite($myFile, "belhassen Gharsallah\n");
    $fileToArray = file("bel7aG.txt");
    foreach ($fileToArray as $value) {
      echo $value . "<br />";
    }

  ?>
</body>
</html>
