<?php

var_dump($_GET);

if (!empty($_GET)) {
    $plane = $_GET["avion"];
    $price = $_GET["price"];


    if ( gettype(intval($price)) === "integer" ) {
       echo "Le prix est bien en integer";
    }else {
        echo "Le prix n'est pas en integer";
    }

    echo $plane;
    echo "<br>";
    echo $price;
} 


// var_dump( intval("banane")  );