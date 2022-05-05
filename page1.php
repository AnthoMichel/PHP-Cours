<?php

$theme = "cerulean";

if (!empty($_GET["theme"])) {

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
        case $_GET["theme"] == "cyborg":
            $theme = "zephyr";
            break;

        default:
            $theme = "cerulean";
            break;
    }
}

function operation()
{
	switch($_POST['operateur'])
	{
		case 'addition': $resultat = $_POST['valeur1'] + $_POST['valeur2']; break;
		case 'soustraction': $resultat = $_POST['valeur1'] - $_POST['valeur2']; break;
		case 'multiplication': $resultat = $_POST['valeur1'] * $_POST['valeur2']; break;
		case 'division' && $_POST['valeur2'] != 0: $resultat = $_POST['valeur1'] / $_POST['valeur2']; break;
	}
	return $resultat;
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
                <li class="nav-item">
                    <a class="nav-link" href="page1.php?theme=cyborg">Cyborg</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center">
        <h1 class="my-2 p-3 bg-dark text-danger text-center">
            Calculatrice
        </h1>

        <form class="bg-info shadow p-3"action="" method="post">
            <input type="text" class="" name="valeur1" placeholder="Entrez une valeur">
            <select class="p-1" name="operateur">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
            <input type="text" name="valeur2" placeholder="Entrez une autre valeur">
            <button type="submit" class="m-auto my-5 d-block btn btn-success">=</button>
        </form>

        <div class="alert alert-success p-4 m-auto my-5 col-6">
        <?php if(!empty($_POST)): ?>

	        <p class="h1"> <?= operation() ?> </p> 

        <?php endif; ?>
        </div>

    </div>

</body>

</html>