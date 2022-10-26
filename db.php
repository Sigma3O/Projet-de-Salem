<?php
//PAGE DB

//on se connecte à la db samplevideo_db

function db_connect() {

    $user = 'root';
    $pass = '';

    try {
        return $db = new PDO('mysql:host=localhost;dbname=samplevideo_db', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
         return die();
         echo "ça fonctionne";
    }
}
?>