<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../form.css">
  <style>
    select {
      background-color: rgba(206, 157, 244, 0.82);
    }
  </style>
</head>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
    <center>
      <h1>acheter</h1>
    </center>
    <fieldset>
      <legend>votre choix isis</legend>
      <br>
      <br>
      <br>
      <br>
      <select name="choice1">
        <option value="Categorie">Categorie</option>
        <option>Mison 19/19</option>
        <option>Appartement</option>
        <option>Residencet</option>
        <option>Immeuble de rapport</option>
        <optgroup>Garage</optgroup>
        <optgroup>Terranin</optgroup>
        <optgroup>Lotissement</optgroup>
      </select>
      <select name="choice2">
        <option>Coloris</option>
        <option>Blanc</option>
        <option>Marron</option>
        <option>Gris</option>
        <option>Beige</option>
        <option>Noir</option>
        <option>Bleu</option>
        <option>Vert</option>
        <option>Rouge</option>
        <option>Multicolore</option>
      </select>
      <select name="choice3">
        <option>prix en milon </option>
        <option>10..20</option>
        <option>20..30</option>
        <option>30..50</option>
        <option>50..100</option>
      </select>
      <select name="choice4">
        <option>Style</option>
        <option>Moderne</option>
        <option>Scandi</option>
        <option>Maison de campagne</option>
        <option>Nature</option>

      </select>
      <select name="choice5">
        <option>Surface min</option>
        <option>25</option>
        <option>30</option>
        <option>40</option>
        <option>50</option>
        <optgroup>60</optgroup>
        <optgroup>70</optgroup>
        <optgroup>80</optgroup>
        <optgroup>90</optgroup>
      </select>


      <br>
      <br>
      <br>
      <br>
    </fieldset>
    <fieldset>
      <legend>votre donne personele isis</legend>
      <br>
      <br>
      <br>
      <br>
      Votre Nom : &nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nom"><br>
      Votre Prenom :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="prenom"><br>
      Votre telphone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="tel" name="tel" pattern="[0-9]{8}"><br>
      votre adresse mail :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail"><br>
      votr adresse personele :&nbsp; &nbsp; <input type="text" name="adr"><br>
      code postal : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cod" pattern="[1-9]{4}"><br>


      <br>
      <br>
      <br>
      <br>
    </fieldset>
    <input type="submit" name="b1" value="valide">
    <input type="submit" name="b2" value="affiche">
  </form>
  <?php
         if (isset($_POST['b1']))
            {
             $ch="Categorie";
             if ($_POST['choice1']==$ch)
             {

                 echo 'chosire une Categorie';
             }
             if ($_POST['choice2']=="Coloris")
             {

                 echo 'chosire une Coloris <br>';
             }
             if ($_POST['choice3']=="prix en milon")
             {

                 echo 'chosire une prix en milon <br>';
             }
             if ($_POST['choice4']=="Style")
             {

                 echo 'chosire une Style<br>';
             }
             if ($_POST['choice5']=="Surface min")
             {

                 echo 'chosire une Surface min'."<br>";
             }


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
            }
            if (isset($_POST['b2']))
            {//$_POST['choice1'].$_POST['choice2']=="Coloris.$_POST['choice3']=="prix en milon.$_POST['choice4']=="Style.$_POST['choice5']=="Surface min"
                echo 'Votre Categorie : '.$_POST['choice1']."<br>";
                echo 'Votre Coloris : '.$_POST['choice2']."<br>";
                echo 'Votreprix en milon : '.$_POST['choice3']."<br>";
                echo 'Votre Style : '.$_POST['choice4']."<br>";
                echo 'Votre Surface min : '.$_POST['choice5']."<br>";
                echo 'votre Nom : '.$_POST['nom']."<br>";
                echo 'votre Prenom : '.$_POST['prenom']."<br>";
                echo 'Votre telphon: '.$_POST['tel']."<br>";
                echo 'Votre email : '.$_POST['mail']."<br>";
                echo 'Votre adresse'.$_POST['adr']."<br>";
                echo 'Votre code postal : '.$_POST['cod']."<br>";


            }
        ?>
</body>

</html>
