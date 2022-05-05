<?php require_once "repoData.php";

//--------------------------------------------  READ -------------------------------------------------

$bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", ""); // connexion à la BDD

$username = "Michel"; // recupére du formulaire

$req  = $bdd->prepare("SELECT * FROM jeux_video WHERE possesseur=:username"); // la requete 

$req->bindValue('username', $username, PDO::PARAM_STR); // le param

$req->execute(); // envoi et execution en BDD 


$myGames = $req->fetchAll(PDO::FETCH_ASSOC); // recupere les datas de la req on met dans un tableau

$req->closeCursor(); // coupe la connection avec la bdd 

// var_dump($myGames); // verifie qu'on a bien notre resultat !

//-------------------------------------------- END READ -------------------------------------------------

// READ --> afficher
// CREATE --> page -> formulaire -> verif et push dans la BDD / redirection vers READ
// UPDATE --> page list (read) --> page edition tu change --> verif et push dans la BDD / redirection vers READ
// DELETE --> page list (read) --> button click balance un delete !
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main class="container">

        <h1 class="p-4 my-5 bg-dark text-danger text-center"> Bienvenue sur STEAM</h1>


        <ul>
            <?php foreach ($myGames as $game) {
                echo "<li>" . $game['nom'] . "</li>";
            }

            ?>
        </ul>

        <ul>
            <?php for ($i = 0; $i < 4; $i++) : ?>

                <li>Cool ! <?= $i ?></li>

            <?php endfor; ?>


            <?php

            $random =  mt_rand(1, 99);
            $genre =  mt_rand(0, 1) ? "men" : "women";  ?>

            <img src="https://randomuser.me/api/portraits/<?= $genre ?>/<?= $random ?>.jpg">
        </ul>
    </main>

</body>

</html>