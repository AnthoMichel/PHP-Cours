<?php  require_once "repoData.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main class="container">

<h1 class="p-4 my-5 bg-dark text-danger text-center"> Bienvenue sur STEAM</h1>


    <?php foreach ($games as $game ): ?>

        <?php require "card.php" ?>

    <?php endforeach; ?>

</main>
    
</body>
</html>