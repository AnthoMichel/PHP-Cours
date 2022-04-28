<?php

// BOUCLES 


// $debut = 0;
// while ($debut < 5) {
//     echo "<p>Cool ! </p>";
//     $debut++;
// }

// $i = 0;
// // $i est une convention == itération
// while($i <= 9){
//     echo "<p> Cool ! $i </p>";
//     $i++;
// }

// $j = 5;
// // $i est une convention == itération
// while($j > 0){
//     echo " Cool ! $j ";
//     $j--;
// }

// BOUCLE WHILE et TABLEAU


// $users = ["Jean","Marie","Mohamed","John","Pierre","Yahya"];

// echo "$users[0] $users[1] $users[2] $users[3] ";

// $a= 0;
// while ($a < count($users) ) {
//     echo "$users[$a] $a <br>";
//     $a++;
// }

// BOUCLE FOR
// un compteur 
// une condition
// une incrementation
// for ($i=0; $i < 10 ; $i++) { 
//     echo "Youpi  $i <br>";
// }


// for ($i=0; $i < count($users) ; $i++) { 

//     echo "$users[$i]  - $i <br>";

// }

// BOUCLE FOREACH

// $users = ["Jean", "Marie", "Mohamed", "John", "Pierre", "Yahya"];

// foreach ($users as $user) {
    
    
//     echo "$user  !<br>";
// }

// echo "<br><hr>";

// // $fruits = array("fraise", "banane" ,"pomme");
// $fruits = ["fraise", "banane", "pomme"];

// foreach ($fruits as $fruit) {
//     echo " $fruit !<br>";
// }


// $starcraft = [
//     "title"     => "Valorant",
//     "price"     => 25,
//     "editor"    => "Riot"
// ];



// foreach ($starcraft as $key => $value) {
//     echo " $key  $value !<br>";
   
// }



// DO WHILE 

// $i = 0;
// do {
//    echo "<p> Do WHILE $i </p>";
//     $i++;
// } while (false);


// BOUCLE IMBRIQUE TAB IMNBRIQUER


// $tabs = [ [1,2,3] , [4,5,6,7] ];

// var_dump($tabs);

// echo count($tabs[0]); // le 1er tableau de tabs de la 1er dimension a 3 elements 
// echo count($tabs[1]); // le 2e tableau de la 1er dimension a 4 elements
// $i= 0;
// while ($i < count($tabs)) {
//     $j= 0;
//     while ($j < count($tabs[$i]) ) {
//         echo "<p> ". $tabs[$i][$j] . "</p>";
//         $j++;
//     }

//     $i++;
// }

// Boucle imbriqué pour du partage 
// Exemple j'ai 4 enfants et 20 bonbons à distribué
// $a= 0;
// while ($a < 4) {
//     echo "Enfant: $a <br>";
//     $b=0;
//     while ($b < 5) {
//         echo "Bonbons b: $b <br>";
//         $b++;
//     }
//     $a++;
// }


$users =[  
            ["Omar","O+", 34], 
            ["Laurent","O-",48], 
            ["Manu","B+",50], 
            ["HajaKe","AB-",22] 
        ];

for ($i=0; $i < count($users) ; $i++) { 
    
    for ($j=0; $j < count($users[$i]) ; $j++) { 
        echo "<p>". $users[$i][$j] ."</p>";
    }
    echo "<hr>";
    
}

?>
































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script src="script.js"></script>
</body>

</html>