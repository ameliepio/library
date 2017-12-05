<?php
require ("model/connexion.php");
// require ('model/BooksManager.php');
// require ('entities/Books.php');


$manager=new BooksManager($db);
// var_dump($manager);

// we use the request to see all the books
$books= $manager->getBooks();




require 'views/indexVue.php';
