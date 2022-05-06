<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>

    <main class="container">


        <h1 class="p-4 my-5 bg-dark text-danger text-center">Formulaire</h1>

        <form action="control.php" method="post" class="form-group">

            <label for="nom">Le nom de votre chat</label>
            
            <input class="form-control" type="text" name="nom" id="nom">

            <label for="nom">L'age de votre chat</label>
            <input  class="form-control" type="text" name="age" id="age">

            <input type="range" name="lvl">

            <button class="btn btn-info shadow my-2"  type="submit">
                Envoyer
            </button>

        </form>
        
        <?php if( !empty($_POST['nom']) && !empty($_POST['age'])): var_dump($_POST) ?>
        

            <p>Nom: <?=  $_POST['nom'] ?> </p>
            <p> <?= $_POST['age'] ?> ans </p>
            <p>Level: <?= $_POST['lvl'] ?> /100 </p>
        
        <?php endif; ?>

       

    </main>

</body>

</html>