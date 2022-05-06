<?php require_once "repoData.php";

//--------------------------------------------  READ -------------------------------------------------

$bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", ""); 
// connexion à la BDD
$req  = $bdd->prepare("SELECT * FROM jeux_video "); // la requete 
$req->execute(); // envoi et execution en BDD 
$myGames = $req->fetchAll(PDO::FETCH_ASSOC); 
$req->closeCursor(); 

// var_dump($myGames); // verifie qu'on a bien notre resultat !


// $req2 = $bdd->prepare("INSERT INTO user (firstname, age) 
// VALUES (:firstname, :age)");
// $firstname = "Omar"; // recupére du formulaire
// $age = 34;          // recupére du formulaire
// $req2->bindValue(":firstname",$firstname, PDO::PARAM_STR);
// $req2->bindValue(":age",$age, PDO::PARAM_INT);
// $result = $req2->execute(); // renvoie true si la requete est good... 
// $req2->closeCursor();

//-------------------------------------------- END READ -------------------------------------------------

// READ --> afficher
// CREATE --> page -> formulaire -> verif et push dans la BDD / redirection vers READ
// UPDATE --> page list (read) --> page edition tu change --> verif et push dans la BDD / redirection vers READ
// DELETE --> page list (read) --> button click balance un delete !

// $dbh = new PDO('mysql:host=localhost;dbname=jeux_projet', "root","");

// $req  = $dbh->prepare("SELECT * FROM jeux");
// $req->execute();
// $myGames = $req->fetchAll(PDO::FETCH_ASSOC);
// $req->closeCursor();

// var_dump($myGames);
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


        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Possesseur</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($myGames as $game) : ?>
                    <tr class="table">
                        <td> <?= $game['ID'] ?></td>
                        <td> <?= $game['nom'] ?></td>
                        <td> <?= $game['possesseur'] ?></td>
                        <td> <?= $game['prix'] ?> &euro;</td>
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('Êtes-vous certain ?')">
                            <input hidden type="text" name="gameID" value="<?= $game['ID'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                        <td>
                        <form action="edit.php" method="post">
                            <input hidden type="text" name="gameID" value="<?= $game['ID'] ?>">
                        <button class="btn" type="submit">Edit</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="create.php" class="btn btn-info d-block">Ajouter un jeu</a>
    </main>

</body>
</html>