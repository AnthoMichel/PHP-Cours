<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", ""); 
// hum un require database.php serait mieux non ?
$idGame = $_POST['gameID'];

$req  = $bdd->prepare("SELECT * FROM jeux_video WHERE ID=:gameID"); 

$req->bindValue('gameID', $idGame, PDO::PARAM_INT); 

$req->execute(); 

$game = $req->fetchAll(PDO::FETCH_ASSOC); 

$req->closeCursor(); 

var_dump($game);
var_dump($game[0]['nom']);

// if (!empty($_POST['gameID'])) {


//     $idGame = $_POST['gameID']; // vérifier type
//     // avoir la bdd ($bdd) forcement... require...
//     $req = "DELETE FROM jeux_video WHERE ID= :id";
//     $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
//     $stmt->bindValue(":id", $idGame, PDO::PARAM_INT);
//     $result = $stmt->execute(); // si good redirection !
//     $stmt->closeCursor();
    
    
//     if ($result) {
//         header("Location: test.php");
//     }
// }

// // faire la requete qui correspond sans SET l'id !
// $req2 = "UPDATE jeux_video SET nom = :nom 
// WHERE id = :gameID";
// $idGame = $_POST['gameID']; // en hidden aussi 
// $nom = $_POST['nom']; // verif en amont etc
// $prix = $_POST['prix']; // pour votre cas d'autres champs
// $statement = $bdd->prepare($req2);
// $statement->bindValue(":id",$idGame, PDO::PARAM_INT);
// $statement->bindValue(":nom",$nom, PDO::PARAM_STR);
// $statement->bindValue(":prix",$prix, PDO::PARAM_INT);
// // faire les bindValue selon votre projet !
// $result = $statement->execute(); 
// // si c'est good redirect qu'on constate le update
// $statement->closeCursor();


?>

<form action="editValid.php" method="post">
    <input type="text" name="nom" value="<?= $game[0]['nom'] ?>">
    <input hidden type="text" name="gameID" value="<?= $game[0]['ID'] ?>">
<button type="submit">Edit</button>
</form>


