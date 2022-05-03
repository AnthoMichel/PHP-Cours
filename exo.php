<?php 

// FONCTIONS 


function hello(){
    echo "Hello";
}

function lanceRoquette(){
    echo "La violence c'est mal, m'voyez... !";
}

// lanceRoquette();

function peace(){
    lanceRoquette();
}

// peace(); 200 / 3500 

function salut($name){
    echo "<p>Hello " . $name .  " my friend !</p>";
}

salut("Calogero");

salut("Mixhle");

salut(12);

function tourName($tour,$prenom){
    echo "<ul>";
    for ($i=0; $i < $tour ; $i++) {
       echo "<li> Toto $i - $prenom</li>";
    }
    echo "</ul>";
    
}

tourName(3,"BoB");
tourName(6,"Revolver");

// tourName(); bug car pas d'arguments !
