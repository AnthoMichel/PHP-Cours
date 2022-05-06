<?php

var_dump($_POST);

if (!empty($_POST)) {
    $plane = $_POST["avion"];
    $price = $_POST["price"];


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