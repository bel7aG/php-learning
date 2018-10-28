<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <form action="done.php" method="post">
    <label for="username">username</label>
    <input type="text" id="username" name="username">
    <label for="address">address</label>
    <input type="text" id="address" name="address">
    <label for="city">city</label>
    <input type="text" id="city" name="city">
    <label for="state">state</label>
    <input type="text" id="state" name="state">
    <label for="guess">guess</label>
    <input type="text" id="guess" name="guess">
    <label for="animal">animal</label>
    <input type="text" id="animal" name="animal">

    <button type="submit">Send</button>
  </form>

  <?php
    $a = "belhassen";
    $b = "Gharsallah";
    $c = $a . $b;
    echo("$c");
  ?>
</body>
</html>
