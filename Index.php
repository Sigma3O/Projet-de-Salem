<?php
//PAGE Index

// Je connecte le fichier Crud2
require_once 'crud.php';

// Je met les dates
$date_crea = time();
$task_id;
$toupdate;

//Je stocke toutes mes tâches dans une variable
$taskslist = readAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>To Do List</title>
</head>

<body>
<body>
    <div class="container">
        <h1>Tout les utilisateurs</h1>
        <div> <br>
            <h2>Ajouter un nouvel utilisateur :</h2>
            <br>

            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label" for="user_id">user_id :</label>
                    <input class="id" type="number">
                </div>
                <div class="form-group">
                    <label class="form-label" for="Username">username :</label>
                    <textarea class="text"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="first_name">first_name :</label>
                    <textarea class="text"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label"for="last_name">last_name :</label>
                    <textarea class="text"></textarea>
                </div>
                <label class="form-label"for="gender">gender :</label>
                <div class="form-group">
                    <input class="form-label" type="radio" name="gender">female
                    <input class="form-label" type="radio" name="gender">male
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">password :</label>
                    <input class="form-label" type="password"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="create">Créer un nouvel utilisateur</button>
            </form>
        </div>

</body>

</html>