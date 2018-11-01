<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title></title>
      <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        td {
          padding: 1rem;
          border: 1px dashed #333;
        }
        tr:last-child td {
          padding: 0;
          border: 0 solid red;
          position: absolute;
          height: 0;
          width: 0;
        }
      </style>
    </head>
    <body>
      <form action="Ajouter_Etudiant.php" method="post">
        <fieldset><legend>Ajout d'un etudiant </legend>
          Matricule :<input type="text" name="matricule"><br>
          Prenom :<input type="text" name="surname"><br>
          Nom :<input type="text" name="nom"><br>
          Classe :<input type="text" name="classe"><br>
          Telephone :<input type="text" name="tel"><br>
          Adresse :<input type="text" name="adress"><br>
          <input type="submit" name="add">
        </fieldset>
      </form>
      <?php
        include 'myFunction.php';
        if (isset($_POST['add'])) {
          if (existe($_POST['matricule']) != true) {
            $myFile = fopen("Student.txt", "a+");
            fwrite(
              $myFile, "\n"
            . $_POST['matricule']
            . "**"
            . $_POST['surname']
            . "**"
            . $_POST['nom']
            . "**"
            . $_POST['classe']
            . "**"
            . $_POST['tel']
            . "**" .
            $_POST['adress']
          );
          fclose($myFile);
        } else {
        echo "<script>alert('existe')</script>";
        }
      }
        $myFile=fopen("Student.txt","r");
        $i=0;
        echo ("<table border=1>"
        . "<tr>
            <td>Matricul</td>
            <td>prenom</td>
            <td>nom</td>
            <td>classe</td>
            <td>telephone</td>
            <td>Adresse</td>
          </tr>
        ");
        while (!feof($myFile)) {
        $ligne = fgets($myFile,1024);
        $myArray = explode("**",$ligne);
        echo "<tr>";
        foreach ($myArray as $data) {
          echo "<td>".$data."</td>";}
          echo "</tr>";
          ++$i;
        }
        echo "</table>";
      ?>
    </body>
</html>
