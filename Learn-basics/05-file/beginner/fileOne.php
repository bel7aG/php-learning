<?php

  if (file_exists("file_exists.txt")) {
    echo "exist <br />";
  } else {
    echo "not exist <br />";
  }

  $myFile = fopen("bel7aG.txt", "a+");
  fwrite($myFile, "bel7aG love Javascript xD. \n");
  fwrite($myFile, "bel7aG love scss syntax too. \n");
  fwrite($myFile, "bel7aG love ReactJS. \n");

  fclose($myFile);
  $myFile = fopen("bel7aG.txt", "r") or die ("file does not exist");

  // print just the first line
  $line = fgets($myFile);
  echo $line;


  while (!feof($myFile)) {
    echo fgets($myFile) . "<br />";
  }

  echo "<hr />";

  $getContents = file_get_contents("bel7aG.txt");
  echo $explodeFileContents = explode(".", $getContents);

  foreach ($explodeFileContents as $data) {
    echo $data . "\n";
  }
