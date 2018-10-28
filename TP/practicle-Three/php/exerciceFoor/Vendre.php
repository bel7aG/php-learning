<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../form.css">
</head>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
    <center>
      <h1>Vendre </h1>
    </center>
    <fieldset>
      <legend>Votre donnes isis</legend>
      Prenom : <input type="text" name="prenom"><br>
      Nom :<input type="text" name="nom"><br>
      Telephone:<input type="tel" name="tel" pattern="[0-9]{8}"><br>
      Email :<input type="email" name="mail"><br>
      <br>Votre propriete<br><br>
      Adresse :<input type="text" name="adr"><br>
      Code postal :<input type="text" name="cod" pattern="[1-9]{4}"> <br>
      Ville : <input type="text" name="vil"><br>
      Surface Habitable(m²):<input type="text" name="sur"><br>
      Prix de vente :<input type="text" name="prix"><br><br><br>
      &nbsp Information additionnelle:<br><br>

      <textarea rows="4" cols="50" name="com">

                    </textarea>
    </fieldset>
    <input type="submit" name="b1" value="valide">
    <input type="submit" name="b2" value="affiche">
  </form>
  <?php
        if (isset($_POST['b1']))
            {
            if(empty($_POST['nom']))
            {                echo 'nom oblige <br>';}
             if(empty($_POST['prenom']))
            {                echo 'prenom oblige <br> ';}
            if(empty($_POST['tel']))
            {                echo 'telphon  oblige <br> ';}

            if((preg_match("#@#", $_POST['mail'])==false)&&(empty($_POST['mail'])))
            {
                echo 'email non valide <br>';

            }

            if(empty($_POST['adr']))
            {                echo 'adresse  oblige <br> ';}
             if(empty($_POST['cod']))
            {                echo 'code postal  oblige <br> ';}
             if(empty($_POST['vil']))
            {                echo 'Ville oblige <br> ';}
             if(empty($_POST['sur']))
            {                echo 'Surface  oblige <br> ';}//
             if(empty($_POST['prix']))
            {                echo 'prix  oblige <br> ';}

            }
            if (isset($_POST['b2']))
            {

               //$_POST['nom'].$_POST['prenom'].$_POST['tel'].$_POST['mail'].$_POST['mail'].$_POST['cod'].$_POST['vil']

                //$_POST['sur'].$_POST['prix']
                echo 'votre Nom : '.$_POST['nom']."<br>";
                echo 'votre Prenom : '.$_POST['prenom']."<br>";
                echo 'Votre telphon: '.$_POST['tel']."<br>";
                echo 'Votre email : '.$_POST['mail']."<br>";
                echo 'Votre adresse'.$_POST['adr']."<br>";
                echo 'Votre code postal : '.$_POST['cod']."<br>";
                echo ' Votre Ville : '.$_POST['vil']."<br>";
                echo 'Votre Surface Habitable(m²) : '.$_POST['sur']."<br>";
                echo 'Votre prix : '.$_POST['prix']."<br>";
                echo 'Votre commenter : '.$_POST['com']."<br>";
            }
        ?>
</body>

</html>
