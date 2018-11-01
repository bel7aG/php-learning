<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
      

        </style>
    </head>
    <body>
        <?php
        $myFile = fopen("Student.txt", "a+");
        $i = 1;
        echo (
          "<table border=1>
            <tr>
              <td>Matricul</td>
              <td>prenom</td>
              <td>nom</td>
              <td>classe</td>
              <td>telephone</td>
              <td>adresse</td>
              <td>action</td>
            </tr>"
        );

        while(!feof($myFile)) {
          $line = fgets($myFile);
          $i++;
          $myArray = explode("**", $line);
          if ($line != "") {
            echo "<tr>";
          }
          foreach($myArray as $data) {
            if ($line != "") {
              echo "<td>" . $data . "</td>";
            }
          }
          if($line != "") {
            echo (
              "<td>
                <a href='Supprimer_Etudiant.php?chaine=$myArray[0]'>Supprimer</a>
              </td></tr>");
          }
        }
        echo "</table>";
        fclose($myFile);
        ?>
    </body>
</html>
