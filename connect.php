<?php
include('conf.php');
$bdd = mysqli_connect(DBHOST,DBUSER, DBPASSWD,DBNAME);
if (mysqli_connect_errno()){
    print('Erreur :'.mysqli_connect_error());
    exit();
}
else  {
    print('Connexion à la base de donnée  ok');
}
?>