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
  echo "Your Name is " . $_POST['username'] . '. <br />';
  echo "Your Address " . $_POST['address'] . '. <br />';
  echo "Your city " . $_POST['city'] . '. <br />';
  echo "Your state " . $_POST['state'] . '. <br />';
  echo "You guess " . $_POST['guess'] . '. <br />';
  echo "You animal " . $_POST['animal'] . '. <br />';

  $numGuessed = (integer) ($_POST['guess']);
  if ($numGuessed >= 10 && $numGuessed <= 20) {
    echo "you talking real.";
    if ($numGuessed === 17) {
      echo " you learn the future!";
    }
  }

  foreach($_POST as $value) {
    echo "<br />" . $value;
  }

  ?>
</body>
</html>
