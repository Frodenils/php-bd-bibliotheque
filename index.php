<?php
//on démarre la session
session_start();

//on se co a la BDD
include('connect.php');

// On exec la requete SQL et on stocke le résultat dans un tableau associatif
$sql = 'SELECT id_l, titre_l FROM livre;';
$resultat = mysqli_query( $bdd, $sql);

//on ferme la connexion
include_once('close.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Liste des types de livres</title>
</head>
<body>
<div class="container">
    <div class="row">

<section class="col-12">
<?php
if (!empty($_SESSION['error'])) {
?>
    <div class="alert alert-danger" role="alert">
        <?php print($_SESSION['error']); 
        $_SESSION['error'] = "";?>
    </div>
<?php } ?>



<?php
if (!empty($_SESSION['Message'])) {
?>
    <div class="alert alert-success" role="alert">
        <?php print($_SESSION['Message']); 
        $_SESSION['Message'] = "";?>
    </div>
<?php } ?>


    <h1>Liste des types de livres</h1>
    <table class="table">
<thead>
    <th>ID</th>
    <th>Libellé</th>
    <th>Actions</th>
</thead>
    <?php  
    foreach ($resultat as $type) {
    ?>  
        <tr>
        <td><?php print($type['id_l']); ?></td>
        <td><?php print($type['titre_l']); ?></td>
        <td><a href="details.php?id_l=<?php print($type['id_l']); ?>">Voir</a> Modifier Supprimer</td>
        </tr>
    <?php
       }
    ?>
    </table>

       <a href="add.php" class="btn btn-primary">Ajouter un type</a>
        </section>
    </div>
</div>

</body>
</html>