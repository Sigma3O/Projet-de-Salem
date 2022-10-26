<?php
//PAGE Crud

// Je connecte le fichier de la db
require 'db.php';

                                    // Je commence par introduire la fonction "ReadAll"
function readAll()
{
// Je me connecte à la db
    $pdo = db_connect();
    $query = "SELECT * FROM user_details";
    $request = $pdo->query($query);
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


                                    // Ensuite j'introduis la fonction "ReadOne"
function readOne($id)
{
// Je me connecte à  la db
    $pdo = db_connect();
    $queryid = 'SELECT * FROM user_details where id = :id';
    $requestid = $pdo->prepare($queryid);
// Je bindParam mon paramètre pour que la variable soit évaluée qu'au moment de l'appel à la fonction
    $requestid->bindParam(':id', $id);
    $requestid->execute();
//Je fetch ma requête
    $result = $requestid->fetch();
//Je retourne le résultat
    return($result);
}


                                    // On passe à la fonction "Create"
function create(int $user_id, string $username, string $first_name, string $last_name, string $gender, int $password, int $status = 1)
{
// Je me connecte à la db
    $pdo = db_connect();
    $querycreate = "INSERT INTO user_details (user_id, username, first_name, last_name, gender, password) VALUES (:user_id, :username, :first_name, :last_name, :gender, :password)";
    $requestcreate = $pdo->prepare($querycreate);
    $requestcreate->execute(array(':user_id' => $user_id, ':username' => $username, ':first_name' => $first_Name, ':last_name' => $last_Name, ':gender' => $gender, ':password' => $password));
}


                                    // Enfin la fonction "Delete"
function deleteOne(int $id)
{
    $pdo = db_connect();
    $querydelete = "DELETE FROM user_details WHERE id=$id";
    $requestdelete = $pdo->prepare($querydelete);
    $requestdelete->execute();
}

?>