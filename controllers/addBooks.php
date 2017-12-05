<?php
require '../model/connexion.php';
require '../model/BooksManager.php';
require ('../entities/Books.php');

$manager = new BooksManager($db);


// if all the $_POST are set
if (isset($_POST['addBooks'])){
// if(isset($_POST['NameBooks']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['idUser'])&& isset($_POST['abstract'])){
// we create a new object with the values enter in the inputs
  $newBooks= new Books($_POST);


// var_dump($newBooks) ;
// && we add a new books in db and show
  $manager->addBooks($newBooks);

  // var_dump($manager);
  // header('Location: index.php');
}
require('../views/addBooks.php');
