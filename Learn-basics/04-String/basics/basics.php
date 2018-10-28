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

    # explode("sep", array);
    $explodeThisString = "Belhassen Gharsallah is a Javascript Lover not this shi*";
    $stringToArrayUsingExplodeFunction = explode(" ", $explodeThisString);
    echo "|";
    foreach ($stringToArrayUsingExplodeFunction as $value) {
      echo $value . " | ";
    }

    $arrayToString = implode(" ", $stringToArrayUsingExplodeFunction);
    echo "<br /><br />" . $arrayToString;

  ?>
</body>
</html>
