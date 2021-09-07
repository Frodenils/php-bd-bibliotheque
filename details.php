<?php
    session_start();

    if ((isset($_GET['id_t'])) && !empty($_GET['id_t']))
    {
        $id = strip_tags($_GET['id_t']);

        include_once 'connect.php';

        $sql = 'SELECT id_t, libelle FROM type_livre WHERE id_t = ?;';
        $stmt = mysqli_prepare($db, $sql);

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $libelle);
        mysqli_stmt_fetch($stmt);

        include_once 'close.php';

        if (!$libelle)
        {
            $_SESSION['erreur'] = "Ce type de livre n'existe pas ";

            header('Location : index.php');

            exit();
        }
    }
    
    else
    {
        $_SESSION['erreur'] = "URL INVALIDE";

        header('Location : index.php');

        exit();
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <title>Oui</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>

    <body>
        <main class ="container">
            <div class="row">
                <section class="col-12">
                    <h1>Details du type de livre<?php print($libelle);?></h1>

                    <p>ID : <?php print($id);?></p>
                    <p>libelllé : <?php print($libelle);?></p>
                    <p>

                    <a class ="btn btn-info" href="index.php"> Retour à la liste </a>
                    <a class="btn btn-primary" href='edit.php?id_t=<?php print($id);?>'>Modifier </a><br>

                    </p>
                </section>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>