<?php
require ("../model/connexion.php");
require '../model/UserManager.php';
require ('../entities/User.php');

// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
// $manager = new UserManager($db);
//
// // création d'une variable display qui retourne de la base de donnée un livre dont l'id est = a la valeur de getid
// // create a display variable that returns from the database a book whose is = the value of getid
// $user=$manager->getUser($_GET['id']);
//
//
// include ('../views/user.php');

$manager = new UserManager($db);

// if all the $_POST are set
if (isset($_POST['user'])){
// if(isset($_POST['NameBooks']) && isset($_POST['author']) && isset($_POST['category']) && isset($_POST['idUser'])&& isset($_POST['abstract'])){
// we create a new object with the values enter in the inputs
  $user= new User($_POST);


// var_dump($newBooks) ;
// && we add a new books in db and show
  $manager->getUser($user);

  // var_dump($manager);
  // header('Location: index.php');
}
include ('../views/user.php');
