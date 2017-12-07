
 <?php
  //
  // On inclut la connexion à la DB, l'autoloader  et on crée l'objet $manager
  // Chargement automatique des classes
  function chargerClasse($classname){
  $entit ='entities/' . $classname.'.php';
    $manager ='model/' . $classname.'.php';
    if(file_exists($entit)){
      require $entit;
    }
    else {
      require $manager;
    }
  }

    spl_autoload_register('chargerClasse');



require ('model/connexion.php');


require ('controllers/index.php');
