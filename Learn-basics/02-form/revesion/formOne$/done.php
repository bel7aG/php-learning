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
    foreach($_POST as $key => $value) {
      if ($key === 'age') {
        $value = ($value);
      }
      echo $key . $value . "<br />";

    }
    $name = $_POST['name'];

    echo $name;

    echo "<br />" . ($value - 110);

    $i = 10;
    for ($i = 0; $i <= 12; $i++) {
      echo "<br />" . $i;
    }
    echo "<br />----- => $i";
  ?>
</body>
</html>
