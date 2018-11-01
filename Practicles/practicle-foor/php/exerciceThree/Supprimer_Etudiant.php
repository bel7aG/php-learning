<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
    <?php
      $myArray = file("Student.txt");
      $str = $_GET['chaine'];
      $myFile = fopen("Student.txt", "w");

      foreach ($myArray as $data) {
        $case = explode("**", $data);
          if($case[0] != $str){
            fwrite($myFile, $data);
          }
      }

        fclose($myFile);
        header('Location:Lister_Etudiant.php');
      ?>
    </body>
</html>
