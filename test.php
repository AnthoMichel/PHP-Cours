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

        <a href="single.item.php?id=1&firstname=Michel">Produit 1</a>
        
        <a href="single.item.php?id=2&firstname=Patrick">Produit 2</a>

        <h1 class="p-4 my-5 bg-dark text-danger text-center"> Bienvenue sur STEAM</h1>


        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Possesseur</th>
                    <th scope="col">Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($myGames as $game) : ?>
                    <tr class="table">
                        <td> <?= $game['ID'] ?></td>
                        <td> <?= $game['nom'] ?></td>
                        <td> <?= $game['possesseur'] ?></td>
                        <td> <?= $game['prix'] ?> &euro;</td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

</body>

</html>