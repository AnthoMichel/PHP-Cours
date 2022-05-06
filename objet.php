<?php


// var_dump($_GET);

if (empty($_GET["name"])) {
    
    echo"C'est vide !";
}else{
    echo $_GET["name"];
}
