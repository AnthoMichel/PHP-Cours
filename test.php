<?php  require_once "repoData.php";

$dbh = new PDO('mysql:host=localhost;dbname=jeux_projet', "root","");

$req  = $dbh->prepare("SELECT * FROM jeux");
$req->execute();
$myGames = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();




// $tabs= [11,5,8,9,22,20,19,77,85,87,6];

// $reponse = [];


// foreach ($tabs as $number) {
   

//     if($number >= 20){
//         echo "  - ".  $number;
//         $reponse[] = $number;
     
//     }

// }
// echo '<br>';
// echo implode(", " , $reponse) . " il y a " . count($reponse) . " chiffre(s) au dessus de 20";

// var_dump($reponse);

//----------------------------------------------------------------------------------

$users= [

    ["name" => "Flo", "lunettes" => 0],
    ["name" => "Michel", "lunettes" => 1],
    ["name" => "Laurent", "lunettes" => 2],
    ["name" => "Manu", "lunettes" => 0]

];
// var_dump( $users);

// $users[0]['note']= 250;

// foreach ($users as $user ) {

//     // var_dump($user) ;
//     var_dump($user["name"]) ;
//     // $value["note"]=5;
//     // $user["note"]=5;
//     // if(isset($value['note'])){
//     //     $value=5;
//     // }
//     // echo array_push($value['note'] , 5);
//     // $user["note"]= 5;

// }
function randomGlass($array){
    for ($i=0; $i < count($array) ; $i++) { 
        
        $array[$i]['lunettes']= mt_rand(0,1) ;
    
        // for ($j=0; $j < count( $users[$i] ) ; $j++) { 
        // }
    }
    return $array;
}


$usersRandomized = randomGlass($users) ;

echo "<hr>";
var_dump($usersRandomized);



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


    <?php foreach ($myGames as $game ): ?>

        <?php require "card.php" ?>

    <?php endforeach; ?>

   
    <ul>
        <?php  for ($i=0; $i < 4 ; $i++) :?>
    
            <li>Cool ! <?= $i ?></li>
    
        <?php endfor; ?>   


        <?php 

        $random=  mt_rand(1,99) ;   $genre =  mt_rand(0,1) ? "men" : "women";  ?>

        <img src="https://randomuser.me/api/portraits/<?= $genre ?>/<?= $random ?>.jpg" >
    </ul>
</main>
    
</body>
</html>