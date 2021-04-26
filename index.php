<?php

include('connect.php');


$resultat = mysqli_query($bdd, 'SELECT * FROM type_livre');
echo 'Il y a '. mysqli_num_rows($resultat). ' entrée dans la base de donnée <br/>';
while ($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['id_t'].' '. $donnees['libelle'].'<br/>';
}
echo '<a href="ajouter_Type.php">Ajouter</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listte des types de livres</title>
</head>
<body>
    
</body>
</html>