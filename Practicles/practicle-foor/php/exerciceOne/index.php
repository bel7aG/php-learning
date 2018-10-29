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
    $fileOne = fopen("commande.txt", "a+");

    fwrite($fileOne, "202005001 | 1236 | 20 octobre 2008 | Tomates | 4 | 4.0\n");
    fwrite($fileOne, "202005001 | 1236 | 21 octobre 2008 | Tomates | 6 | 3.5\n");
    fwrite($fileOne, "202005001 | 1236 | 21 octobre 2008 | Tomates | 6 | 3.5\n");
    $fileArray = file("commande.txt");

    foreach ($fileArray as $value) {
        echo nl2br($value);
    }



  ?>
</body>
</html>
