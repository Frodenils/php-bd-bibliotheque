<!doctype html>
<html lang="fr">
  <head>
      <title>PHP - Ajouter 6</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>

  <body>
    <center>
      <h1>PHP - Exemple 6</h1>
      <h2>Consultation d'une Base de Données<br>par un Programme sur le Serveur</h2><hr><br>

      <?php
        $love = $_GET['love'];
        $DataBase = mysqli_connect("mysql-nilsfrd.alwaysdata.net", "nilsfrd_cdi", "Bibliotheque50*");

        mysqli_select_db($DataBase, "nilsfrd_bibliotheque");

        $Requete = "INSERT INTO type_livre ( id_t ,libelle )
                    VALUES ('','$love');";
        $Resultat = mysqli_query($DataBase, $Requete) or die(mysqli_error($DataBase));

        mysqli_close($DataBase);
      ?>

      <p> <?php print('$love');?>à bien été ajouter à la liste<P><br>

      <a href='index.php'>Retour à la liste</a><br><hr>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </center>
  </body>
</html>