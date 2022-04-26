<?php require_once "repoData.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>

<body>
    <div class="container">
        <h1 class="my-5 text-center text-danger">
            <?= $home ?>
        </h1>

        <div class="card shadow col-5 text-center">
            <h2 class="h3"> Titre: <?= $valo['title'] ?> </h2>
            <p>Editeur: <?= $valo['editor'] ?></p>
            <p>Catégorie: <?= $valo['category'] ?></p>
            <p>Joueurs: <?= $valo['nb_players'] ?> joueurs</p>
        </div>

    </div>

</body>

</html>