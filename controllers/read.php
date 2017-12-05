<?php
require ("../model/connexion.php");
require '../model/BooksManager.php';
require ('../entities/Books.php');

// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new BooksManager($db);

// création d'une variable display qui retourne de la base de donnée un livre dont l'id est = a la valeur de getid
// create a display variable that returns from the database a book whose is = the value of getid
$book=$manager->getBook($_GET['id']);





include ('../views/read.php');
