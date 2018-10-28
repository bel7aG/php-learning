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
  <?php
    $name = $email = $gender = $comment = "";
    $nameErr = $emailErr = $genderErr = $commentErr = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "name required";
        } else {
          $name = isOkey($_POST["name"]);
        }
        if (empty($_POST["email"])) {
          $emailErr = "email required";
        } else {
          $email = isOkey($_POST["email"]);
        }

        if (empty($_POST["gender"])) {
          $genderErr = "gender required";
        } else {
          $gender = isOkey($_POST["gender"]);
        }
        if (empty($_POST["comment"])) {
          $commentErr = "comment required";
        } else {
          $comment = isOkey($_POST["comment"]);
        }
      }

      function isOkey($myData) {
        $myData = trim($myData);
        $myData = stripslashes($myData);
        $myData = htmlspecialchars($myData);
        return $myData;
      }

  ?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">name</label>
    <input type="text" name="name" placeholder=<?php echo $nameErr; ?>>
    <label for="email">email</label>
    <input type="text" name="email" placeholder=<?php echo $emailErr; ?>>
    <label for="gender">Gender</label>
    male: <input type="radio" name="gender" value="Male">
    female: <input type="radio" name="gender" value="Female">
    <span><?php echo $genderErr; ?></span>
    <label for="comment">comment</label>
    <textarea name="comment" id="" cols="30" rows="10" placeholder=<?php echo $nameErr; ?>></textarea>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if ($name && $email && $gender && $comment) {
      echo "name: " . $name . "<br />";
      echo "email: " . $email. "<br />";
      echo "gender: " . $gender. "<br />";
      echo "comment: " . $comment. "<br />";
    } else {
      echo "<h1 id='error'>valid all please</h1>";
    }
  ?>

</body>
</html>
