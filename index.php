
 <?php
//this can be something close to a routing system


 // function chargerClasse($classe)
 // {
 //     if ($classe == 'ArticlesManager') {
 //         require 'Model/' . $classe . '.php';
 //     } else {
 //         require 'Model/entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
 //     }
 // }
 // spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
 require 'model/connexion.php';
 require 'controller/index.php';
