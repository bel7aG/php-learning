<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    function existe($m){
      $tab=file("Student.txt");
      foreach ($tab as $val) {
        $l= explode("**", $val);
        if ($l[0] == $m) {
        return true;
        }
      }
      return false;
      }
  ?>
  </body>
</html>
