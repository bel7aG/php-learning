<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
  fieldset {
    height: 100vh;
  }
  input {
    padding: 2rem;
  }
  input[type="submit"] {
    width: 100%;
    display: block;
    background-color: #222;
    color: orangered;
    font-size: 3rem;
  }
  </style>

</head>
<body>
  <form method="post" action=" <?php echo $_SERVER['PHP_SELF'];?> ">
    <fieldset>
      <legend>Vérification d'adresse IPv4</legend>
      <input type="text" name="chomp1" pattern="[1-9]{1,3}"> .
      <input type="text" name="chomp2" pattern="[1-9]{1,3}"> .
      <input type="text" name="chomp3" pattern="[1-9]{1,3}"> .
      <input type="text" name="chomp4" pattern="[1-9]{1,3}"> <br>
      <input type="submit" name="b1" value="Verifier">
    </fieldset>
  </form>
  <?php
        if (isset($_POST['b1'])) {
             include ("ex2_fonctions.php");
             $ip=$_POST['chomp1'].".".$_POST['chomp2'].".".$_POST['chomp3'].".".$_POST['chomp4'];
             if(valideIP($ip))
             {
                 echo $ip .'   est une adreesse IPv4 valide';

             }
              else {
              echo $ip .'  n\'est pas  une adreesse IPv4 valide';
              }
        }
  ?>
</body>

</html>
