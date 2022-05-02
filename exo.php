<?php 



//-------- IF STRUCTURE DE CONTROLE

$test="000";
// $test=000; //

// var_dump( (bool) $test );

// var_dump( time()  ); // 1970

// if (!$test) {
//     echo "VRAI FAUX c'est relatif... <br> Tout est relatif...[...]absolue...";
// }



// NOTION TRUTHY FALSY considerer comme... voir slide


// SOLUTION entre autres

// $truc="";
// var_dump( isset($truc)) ; // test si set et pas null !

// var_dump(empty($truc));



// IF ET LOOP 


// for ($i=0; $i <= 10 ; $i++) {
    
 

//     if ($i % 2 == 0) {
//         echo " $i : C'est paire <br>";
//     }else{
//         echo " $i : C'est impaire  <br>";
//     }
    
// }

// var_dump( 15 % 2 == 0 ); // 4 + 4 8 (2)

// IF ELSE CONCEPT


// if (false) {
//     echo "Si ";
// } else {
//     echo "Sinon";
// }

// for ($i=1; $i <= 10; $i++) {
//     if($i <> 5) {
//         echo "<p>$i</p>";
//     }else {
//         echo "<h1>$i</h1>";
//     }
// }

// for ($i=1; $i <= 10; $i++) {
//     if($i != 5) {
//         echo "<p>$i</p>";
//     }else {
//         echo "<h1>$i</h1>";
//     }
// }

// for ($i=1; $i <= 10; $i++) {
//     if($i >5 || $i < 5) {
//         echo "<p>$i</p>";
//     }else {
//         echo "<h1>$i</h1>";
//     }
// }

// ------- TERNAIRE 

// $isConnected = true;

// 2 > 1 ?  "Hello Neo" : "Gero" ;

// ------- IF() (ELSE IF( )) ELSE 


// SWITCH CASE "SELON LA DOC"


// $i = 8;

// if ($i == 0) {
//     echo "i égal 0";
// } elseif ($i == 1) {
//     echo "i égal 1";
// } elseif ($i == 2) {
//     echo "i égal 2";
// }

// switch ($i) {
//     case 0:
//         echo "i égal 0";
//         break;
//     case 1:
//         echo "i égal 1";
//         break;
//     case 2:
//         echo "i égal 2";
//         break;
// }
 
// $fruit = "coco";

// switch ($fruit) {
//     case "apple":
//         echo "i est une pomme";
//         break;
//     case "bar":
//         echo "i est une barre";
//         break;
//     case "cake":
//         echo "i est un gateau";
//         break;
// }


// switch ($i) {
//     case 0:
//         echo "i égal 0";
      
//     case 1:
//         echo "i égal 1"; 
//         break;
//     case 2:
//         echo "i égal 2";
       
// }

// switch ($i) {
//     case 0:
//     case 1:
//     case 2:
//         echo "i est plus petit que 3 mais n'est pas négatif";
//         break;
//     case 3:
//         echo "i égal 3";
// }
$i = 2;
switch ($i ) {
    case 3:
        echo "c'est 5";
        break;
    case 10:
        echo "c'est 10";
        break;
    case 8:
        echo "c'est 8";
        break;
    default:
       echo "i n'est ni égal à 2, ni à 1, ni à 0.";
}
