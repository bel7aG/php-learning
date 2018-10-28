<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
          function valideIP($ip) {
              if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return true;
              } else {
                  return false;
              }
          }
        ?>
    </body>
</html>
