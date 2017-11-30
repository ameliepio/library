<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', 'root');
}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}



//require('model/BooksManager.php');

// Création d'un manager compte. Je le crée une seule fois, car je reste toujours sur le même fichier.
// Je lui passe mon instance PDO $db en argument
//$manager = new BooksManager($db);

// Création d'un manager user
//$managerUser = new UserManager($db);
