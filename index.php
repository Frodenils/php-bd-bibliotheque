<?php
$bdd = mysqli_connect('mysql-nilsfrd.alwaysdata.net', 'nilsfrd_cdi','Bibliotheque50*','nilsfrd_bibliotheque');
$resultat = mysqli_query($bdd, 'SELECT * FROM type_livre');
echo 'Il y a '. mysqli_num_rows($resultat). ' entrée dans la base de donnée <br/>';
while ($donnees = mysqli_fetch_assoc($resultat)){
    echo $donnees['id_t'].' '. $donnees['libelle'].'<br/>';
}
echo '<a href="ajouter_Type.php">Ajouter</a>';
?>