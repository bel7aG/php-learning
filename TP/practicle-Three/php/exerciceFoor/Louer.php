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
      <h1>Louer </h1>
    </center>
    <fieldset>
      <legend>votre donnes isis</legend>
      Prenom : <input type="text" name="prenom"><br>
      Nom :<input type="text" name="nom"><br>
      Telephone:<input type="tel" name="tel" pattern="[0-9]{8}"><br>
      Email :<input type="email" name="mail"><br>
      <br>Votre propriete<br><br>
      Adresse :<input type="text" name="adr"><br>
      Code postal :<input type="text" name="cod" pattern="[1-9]{4}"> <br>
      Ville : <input type="text" name="vil"><br>
      <br>
      <br>
      <br>
    </fieldset>
    <fieldset>
      <legend>Caracteristique </legend>
      prix minmal: <input type="text" name="prix1"><br>
      prix maximal: <input type="text" name="prix"><br>
      Surface Habitable(m²):<input type="text" name="sur"><br>
      Dans quell Ville : <input type="text" name="vil2"><br>
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



         if(empty($_POST['prix1']))
        {                echo 'prix min   oblige <br> ';}

        if(empty($_POST['prix']))
        {                echo 'prix max   oblige <br> ';}
        if(empty($_POST['sur']))
        {                echo 'Surface  oblige <br> ';}
        if(empty($_POST['vil2']))
        {                echo 'Ville de misson  oblige <br> ';}
        }


        //***************************************//
        if (isset($_POST['b2']))
        {
            echo 'votre Nom : '.$_POST['nom']."<br>";
            echo 'votre Prenom : '.$_POST['prenom']."<br>";
            echo 'Votre telphon: '.$_POST['tel']."<br>";
            echo 'Votre email : '.$_POST['mail']."<br>";
            echo 'Votre adresse'.$_POST['adr']."<br>";
            echo 'Votre code postal : '.$_POST['cod']."<br>";
            echo ' Votre Ville : '.$_POST['vil']."<br>";

            echo 'le prix minmalae est : '.$_POST['prix1']."<br>";
            echo 'le prix maximal est : '.$_POST['prix']."<br>";
            echo 'Votre Surface Habitable(m²) : '.$_POST['sur']."<br>";
            echo ' Ville de misson est  : '.$_POST['vil2']."<br>";
        }
    ?>
</body>

</html>
