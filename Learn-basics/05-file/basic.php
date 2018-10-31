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
    $name = $surname = $email = $age = "";
    $nameErr = $surnameErr = $emailErr = $ageErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "name reqiured";
      } else {
        $name = $_POST["name"];
      }
      if (empty($_POST["surname"])) {
        $surnameErr = "surname reqiured";
      } else {
        $surname = $_POST["surname"];
      }
      if (empty($_POST["email"])) {
        $emailErr = "email reqiured";
      } else {
        $email = $_POST["email"];
      }
      if (empty($_POST["age"])) {
        $ageErr = "age reqiured";
      } else {
        $age = $_POST["age"];
      }
    }

    function isFine($data) {
      $data = trim($data);
      $data = htmlspecialchars($data);
      $data = stripslashes($data);
      return $data;
    }


  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    name:
    <input type="text" name="name">
    surname:
    <input type="text" name="surname">
    email:
    <input type="email" name="email">
    age:
    <input type="number" name="age">
    <button type="submit">GO</button>
  </form>


  <?php
    // r(read onlly), r+ mayékhdmou kén ki yabda fama file makenesh throw an error.
    // $fileTwo = fopen("basicFileTwo.txt", "r+");
    // fwrite($fileTwo, "Belhassen Gharsallah oh yeah" . "\n");

    //w(write only), w+ ezouz ihotou el pointeur fel beginning wi ifaskhouh él contents ou kén
    //él fichier mch maoujoud yasen3ouh.
    $fileOne = fopen("basicFileOne.txt", "w");
    fwrite($fileOne, "bel7aG Learn file handling inside php file - 1" . "\n");
    fwrite($fileOne, "line two");

    // a(write only), a+ a manéha append , él fare9 mabinha ou mabin e write anou
    // thot el pointeur felekher (append), 3lé fékra write tfasakh él contents jémla xD..
    // ou tasna3 él fichier law kénou mch maoujoud kima él w

    //read the file and get the contents in an array
    $openFileOne = fopen("basicFileOne.txt", "a");
    $fileThreeArray = file("basicFileOne.txt");

    foreach($fileThreeArray as $line) {
      echo $line . "<br /><br /><br />";
    }








    /*
    -'r'	Open for reading only; place the file pointer at the beginning of the file.
    -'r+'	Open for reading and writing; place the file pointer at the beginning of the file.

    -'w'	Open for writing only; place the file pointer at the beginning of the file and truncate
    the file to zero length. If the file does not exist, attempt to create it.
    -'w+'	Open for reading and writing; place the file pointer at the beginning of the file
    and truncate the file to zero length. If the file does not exist, attempt to create it.

    -'a'	Open for writing only; place the file pointer at the end of the file.
    If the file does not exist, attempt to create it. In this mode,
    fseek() has no effect, writes are always appended.
    -'a+'	Open for reading and writing; place the file pointer at the end of the file.
    If the file does not exist, attempt to create it. In this mode,
    fseek() only affects the reading position, writes are always appended.

    -'x'	Create and open for writing only; place the file pointer at the beginning of the file.
          If the file already exists, the fopen() call will fail by returning FALSE and
          generating an error of level E_WARNING. If the file does not exist,
          attempt to create it.
          This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2)
          system call.
    -'x+'	Create and open for reading and writing; otherwise it has the same behavior as 'x'.

    -'c'	Open the file for writing only. If the file does not exist, it is created. If it exists,
    it is neither truncated (as opposed to 'w'),
    nor the call to this function fails (as is the case with 'x').
    The file pointer is positioned on the beginning of the file.
    This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify
    the file, as using 'w' could truncate the file before the lock was obtained
    (if truncation is desired, ftruncate() can be used   after the lock is requested).
    -'c+'	Open the file for reading and writing; otherwise it has the same behavior as 'c'.

    -'e'	Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.
    */

  ?>

  <?php
    $myMessage = ($name && $surname && $email && $age) ? (
      "name: " . $name
      . "<br />surname: "
      . $surname
      . "<br />email: "
      . $email
      . "<br />age: "
      . $age
    ) : "put your Information correctly please";
    echo $myMessage;
  ?>
</body>
</html>
