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
    echo "<h1 style='color: red'>Belhassen Gharsallah</h1>";
    print("<h4 style='color: orangered'>bel7aG</h4>");

    $a = 2;
    $b = 2;
    $isOkey = $a === $b ? true : false;
    echo ($isOkey . ' - ' . is_bool($isOkey) . " like react no boolean in the page the true is 1 and false nothing in the page");

    echo "<br /> $a + $b = " . ($a + $b);

    function myFFunction() {
      global $a, $b;
      return ($a + $b);
    }
    echo (myFFunction());

    printf("<br />%s %d", "<h1>Belhassen Gharsallah</h1>", myFFunction());
    $mySecondArray = array("bel7aG", "Belhassen Gharsallah");

    echo ("<br />" . $GLOBALS['a'] . "<br />");

    $vv = (boolean) ("s");
    echo $vv;

  ?>
</body>
</html>
