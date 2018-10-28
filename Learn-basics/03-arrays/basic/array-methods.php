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
    $myInfo = array(
      "name" => "belhassen",
      "language" => "Javascript",
      "alive" => true,
      "github" => "bel7aG",
      true => "yes"
    );

    echo "my name is " . $myInfo['name']
      . ". i still alive "
      . ($myInfo["alive"] ? "(this is true)" : "(dead)")
      . ". <br />my github talk about me on when yoou talk about Javascript .."
      . $myInfo[true];

    $mySkills = array(
      "Javascript",
      "React",
      "ES6 / ES7 / ES8",
      "sass / scss"
    );

    #array_merge(arrayOne, arrayTwo, ...);

    $bel7aG = array_merge($myInfo, $mySkills);

    echo("<br /><br /><br />");

    foreach ($bel7aG as $key => $data) {
      echo $key . ": " . $data . "<br />";
    }

    #array_sum(array);
    $arrayOfSum = array(1, 2, 3, 4, 5, "3", "3", function() {return 11;}, "bel7aG");

    $sum = array_sum($arrayOfSum);
    echo $sum;

    #array_keys(array);

    $v = array_keys($myInfo);

    echo "<br />" . is_array($v); //true

    foreach ($v as $keysValue) {
      $stream = is_integer($keysValue) ? ($keysValue ? "true" : "false") : "$keysValue";
      echo "<br />" . $stream;
    }

    #array_fill($stratIndex, numberOfItem, mixed value);
    $fillArray = array_fill(10, 3, "bel7aG");

    foreach($fillArray as $key => $data) {
      echo "<br />" . $key . "==> " . $data;
    }

    $arrayOfSum = array_filter($arrayOfSum, function($element) {
      return is_integer($element);
    });

    $arrayOfSum = array_map(function($element) {
      return $element * 2000;
    }, $arrayOfSum);


    echo "<br /><br />";

    foreach ($arrayOfSum as $key => $data) {
      echo $key . "==> " . $data . "  |  ";
    }

    array_push($arrayOfSum, "bel7aG", "github", "javascript");
    echo "<br /><br /><br />";
    foreach ($arrayOfSum as $key => $data) {
      echo $key . "==> " . $data . "  |  ";
    }

    //in_array(element, array);
    $message = in_array("bel7aG", $arrayOfSum) ? ("<br />" . "bel7aG is there") : ("not exist");
    echo $message;

    //array_reverse(array, true);
    echo "<br />";
    print_r(array_reverse($arrayOfSum));
    echo "<br />";
    print_r(($arrayOfSum));

    #sort(Array, typeOfSort);
        #==> about typeOfSort ==> SORT_STRING | SORT_NUMERIC | (SORT_REGULAR ==> ASCII CODE)

    $sArray = array(10, 20, 1, 3, 44, 99, 0, -33, "2");
    echo "<br /><br /><br />";
    print_r($sArray);

    sort($sArray, SORT_NUMERIC);
    echo "<br /><br /><br />";
    print_r($sArray);




  ?>
</body>
</html>
