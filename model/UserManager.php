<?php

class UserManager
{

  //======================================================================
  // Model Article, communicate with the bdd
  //======================================================================
  private $db; // Instance PDO

  public function __construct($db){
    $this->setDb($db);
  }

  // request to show all Users

  public function getUsers(){

    $req=$this->db->query('SELECT * FROM UserBooks');
    $users=$req->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $key => $value) {
    $users[$key]= new User($value);
    }
    return $users;
  }

  //request to see just one user

  public function getUser($id){
    $req=$this->db->prepare('SELECT * FROM UserBooks WHERE IdUser=:IdUser,NameUser=:NameUser,Mail=:Mail');
    $req->execute(array(
      ':IdUser'=>$IdUser,
      ':NameUser'=>$NameUser,
      ':Mail'=>$Mail
    ));
    $user=$req->fetch(PDO::FETCH_ASSOC);
    $user= new User($user);
    return $user;
  }

      // Setter
      // // We make sure that we pass a PDO object as a parameter
      // On s'assure qu'on passe bien un objet PDO en paramètre
      public function setDb($db){
        $this->db = $db;
      }

}
