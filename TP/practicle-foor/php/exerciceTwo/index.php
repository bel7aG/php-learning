<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <form method="post" action=" <?php echo $_SERVER['PHP_SELF'];?> ">
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
        if (isset($_POST["b1"])) {
            $myLine="\n";
            for ($k=1; $k < count($_POST); $k++) {
                if ($k == (count($_POST) - 1)) {
                  $myLine .= $_POST["input".$k];
                } else {
                  $myLine .= $_POST["input".$k]."|";
                }
            }
            $myLine .= "\n";
            $myFileVar = fopen("myFile.txt","a");
            fwrite($myFileVar, $myLine);
            fclose($myFileVar);
            $contenu= file_get_contents("myFile.txt");
            $tab=explode("|", $contenu);
            echo("<table border=2px><tr>");
            $i = 0;
            echo("<th>Numéro de Commande</th><th>Numero Client</th><th>Date de Commande</th><th>Designation article</th><th>Quantité</th><th>Prix Unitaire</th></tr><tr>");
            $meme = 1;
            foreach($tab as $val) {
                if ((($i % 6) == 0)) {
                    echo("</tr><tr>");
                }
                echo ("<td>".$val."</td>");
                $i++;
            }
            echo ("</tr><table>");
        }
        ?>
</body>

</html>
