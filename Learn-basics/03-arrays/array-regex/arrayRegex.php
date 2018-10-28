
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
  /*
    \d 0-9
    \D not(0-9)
    \w a-z A-Z 0-9 _
    \W not(a-z A-Z 0-9 _)
    \s space tab
    \S not(space tab)
    \b word boundrie manéha laou kén andi  (Cat Hat) el espace eli bin kelemtin howa \b ki nfassakh el hat wa9tha madch témchi donc \s temchi té3 space khater iwali mach boundrie :D

  */


    $randomArray = array(
      'bel7aG',
      'belhassen',
      'bel7a',
      'bel7aG',
      'isetRades',
      '11Rue abd Rahmen ibn Aouf',
      '12345',
      'p* 1',
      '120'
    );

    $matchArray = preg_grep("%bel7%", $randomArray);
    foreach($matchArray as $value) {
      echo $value . '<br />';
    }

    $matchFiveDegits = preg_grep("%[aG]{2}%", $randomArray);
    foreach($matchFiveDegits as $value) {
      echo('<br />' . $value);
    }

  ?>
</body>
</html>
