<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../form.css">
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    td {
      padding: 2rem;
    }
  </style>
</head>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
    Votre nom : <input type="text" name="nom" pattern="[a-z-A-Z]{3,7}"><br>
    Votre Prenom <input type="text" name="prenom" pattern="[a-z-A-Z]{3,7}"><br>
    Votr age <input type="text" name="age"><br>
    Votre adresse mail <input type="text" name="mail"><br>
    <input type="submit" name="button-one" value="Inscription"><br>
    <input type="submit" name="button-two" value="Afficher"><br>
  </form>
  <?php
      if (isset($_POST['button-one']))
          {
          if(empty($_POST['nom']))
          {                echo 'nom oblige <br>';}
           if(empty($_POST['prenom']))
          {                echo 'prenom oblige <br> ';}

          if((preg_match("#@#", $_POST['mail'])==false)&&(empty($_POST['mail'])))
          {
              echo 'email non valide <br>';
          }
         if(empty($_POST['age']))
          {                echo 'age oblige <br> ';}}

      if (isset($_POST['button-two'])) {
          echo'<script>alert("linscription pour :' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . 'a ete en compte</script>';

           $tabOne=array('nom'=>$_POST['nom'],'prenom' => $_POST['prenom'], 'age' => $_POST['age'], 'email' => $_POST['mail']);
           echo'<table border=3>';
           foreach ($tabOne as $key => $value)
           {
               echo '<tr>';
               echo'<td>' . $key . '</td>';
               echo'<td>' . $value . '</td>';
               echo '</tr>';

           }
           echo '</table>';
           }
      ?>
</body>

</html>
