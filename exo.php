<?php 

$phrase = "";

$tabs = ["Vivement", "la", "fin", "de la formation", "!", "!"];

echo $phrase;

// $phrase.= "OVH"; // 0
// $phrase.= " "; // 0
// $phrase.= "les"; // 1
// $phrase.= " "; // 1
// $phrase.= "batards !"; // 2
// $phrase.= " "; // 2
// // la fin du tableau

for ($i=0; $i < count($tabs); $i++) { 
    $phrase.= $tabs[$i] . " ";
}

echo $phrase; 
var_dump($tabs);

echo implode(" ", $tabs); // au final on a refait le implode ! 

