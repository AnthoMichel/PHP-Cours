<?php

$theme = "cerulean";

switch ($theme) {
    case $_GET["theme"] == "morph":
        $theme = "morph";
        break;
    case $_GET["theme"] == "quartz":
        $theme = "quartz";
        break;
    case $_GET["theme"] == "sketchy":
        $theme = "sketchy";
        break;
    case $_GET["theme"] == "vapor":
        $theme = "vapor";
        break;
    case $_GET["theme"] == "zephyr":
        $theme = "zephyr";
        break;

    default:
        $theme = "cerulean";
        break;
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/<?= $theme ?>/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thémes</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <div class="container-fluid  ml-auto">

            <a class="navbar-brand" href="#">Themes</a>

            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=morph">Morph</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=quartz">Quartz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=sketchy">Sketchy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=zephyr">Zephyr</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=vapor">Vapor</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="my-2 p-3 bg-dark text-danger text-center">
            Choisir son théme
        </h1>

    </div>

</body>

</html>