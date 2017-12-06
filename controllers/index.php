<?php
require ("model/connexion.php");
// require ('model/BooksManager.php');
// require ('entities/Books.php');


$manager=new BooksManager($db);
// var_dump($manager);

// we use the request to see all the books
$books= $manager->getBooks();

// if all the $_POST are set
if (isset($_POST['sortCategories'])){

// var_dump($_POST);
// we create a new object with the values enter in the inputs
$books = $manager->sortCategories($_POST['sortCategories']);
  // $newCategory= new Books($_POST);

// var_dump($newBooks) ;
// && we sort Categories a new category in db and show


}




require 'views/indexVue.php';
