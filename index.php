
 <?php
//this can be something close to a routing system



  // On inclut la connexion à la DB, l'autoloader  et on crée l'objet $manager
  // Chargement automatique des classes
  function chargerClasse($classname){
    if ($classname = "BooksManager") {
      require_once 'model/' . $classname . '.php';
    } else {
      require 'entities/' . $classname . '.php';
    }

  }
  spl_autoload_register('chargerClasse');

require ('model/connexion.php');


require ('controllers/index.php');
