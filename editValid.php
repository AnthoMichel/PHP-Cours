<?php
$bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", "");
// encore cette bdd ici !
$idGame = $_POST['gameID'];
$nom = $_POST['nom']; 
// faire des vérifs avant !
$statement = $bdd->prepare("UPDATE jeux_video SET nom = :nom 
WHERE id = :gameID");
$statement->bindValue(":gameID",$idGame, PDO::PARAM_INT);
$statement->bindValue(":nom",$nom, PDO::PARAM_STR);
$result = $statement->execute(); 
$statement->closeCursor();
// ah comme ça ! évidemment !
if ($result) {
    header("Location: test.php");
}