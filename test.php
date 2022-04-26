<?php


// LES ARRAY 


// $fruits = ["fraise","grenade","melon","fakya","abricot"];
// //              0       1       2       3       4
// // echo $fruits; // bug car echo pour "string"

// var_dump($fruits);



// // echo "<pre>";
// // print_r($fruits); // pré-formate pour un affichage plus pratique
// // echo "</pre>";
// echo $fruits[4] ; // permet d'accèder 
// $fruits[4] = "peche"; // modifie l'entrée
// var_dump($fruits);


// LES TABLEAUX 2D 3D

$toto = "Michel";

$games = [["tarkov", 10, false], ["cod", 100, false], ["mario", 1, false], ["cs", 10, true]];
//          0 [ 0      1    2]  | 1 [ 0    1    2  ]  | 2 [ 0     1    2 ] 
// var_dump($games);

// var_dump($games[3][0]);

$games[] = ["Toto", "Tata"];
// $games = "tata";
var_dump($games);

$tab = ["a", 1, 2, true];

$tab[] = false; // ajout à la fin du tableau

var_dump($tab); // a , 1 , 2 , true , false

$games3D = [ // O tarkov  0-0 -> tarkov 0-1 -> 10  0-2 -> false / 1 cod / 2 Mario / 3 CS
    ["tarkov", 10, false],
    ["cod", 100, false],
    ["mario", 1, false],
    ["cs", 10, true, ["MM", "BOMBE", "OTAGES"]]

];



$frameworksAssoc = [
        ["name" => "angular", "dev" => 'front', "async" => true],
        ["name" => "symfony", "dev" => 'full-stack', "async" => false],
        ["name" => "spring boot", "dev" => 'full-stack', "async" => false, "mode" => ["1v1", "2v2"] ]

];

$tabAssoc = ["name" => "Michel"];
echo $tabAssoc["name"] . " c'est génial";
// echo '$frameworksAssoc[0][name] c\'est génial';

var_dump($frameworksAssoc);

echo count($games3D); // 4
// $a = [];
$a[0] = 1;
$a[1] = "banane";
$a[2] = 5;

var_dump($a);

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

// // count récursif
var_dump(count($food["fruits"]));
// $banane = "pantain";
// // count normal
// var_dump( is_array($banane) );

var_dump(count($frameworksAssoc[2]["mode"]));
echo '<h1>QUIZ</h1>';
$tab3D = [ [true, false] , [1,0, ["GG"] ]];

$chaine = "Ceci est un string";

 var_dump($chaine);

 var_dump($chaine[2]); //C