<?php


// var_dump($_GET);

if (!empty($_GET)) {

    echo "Produit: " . $_GET["name"] . "<br>";

    if($_GET['price'] > 100){
        echo "Prix: " . $_GET["price"]  . " &euro;<br>";
        echo "<p>Paiement en plusieurs fois possible ! </p>";
    }else{
        echo "Prix: " . $_GET["price"]  . " &euro;<br>";
    }

}else{
    
    header("Location: list.item.php");
}
