<?php


// var_dump($_GET);

if (empty($_GET["name"])) {

    header("Location: list.item.php");
}else{
    echo $_GET["name"];
}
