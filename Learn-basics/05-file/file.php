<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">
    <fieldset>
      <legend>Nouvelle Commande</legend>
      Num de Commande :<input type="text" name="input1"> <br>
      Num Client :<input type="text" name="input2"> <br>
      Date Commande :<input type="text" name="input3"> <br>
      Designation article :<input type="text" name="input4"> <br>
      Quantité :<input type="text" name="input5"> <br>
      Prix Unitaire :<input type="text" name="input6"> <br>
      <input type="submit" name="b1" value="Insérer">
    </fieldset>
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $line = "\n";
    }
  ?>
</body>
</html>
