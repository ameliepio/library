<?php
require 'entities/Books.php';
class BooksManager
{

  //======================================================================
  // Model Article, communicate with the bdd
  //======================================================================
  private $db; // Instance PDO

  public function __construct($db){
    $this->setDb($db);
  }

  // request to show all Books

  public function getBooks(){

    $donnees=$this->db->query('SELECT * FROM Books');
    $books=$donnees->fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key => $value) {
      $books[$key]= new Books ($value);
    }
    return $books;
  }

  //request to see just one book

  public function getBook($id){
    $donnees=$this->db->prepare('SELECT * FROM Books WHERE id=:id');
    $donnees->execute(array(
      ':id'=>$id
    ));
    $book=$donnees->fetch(PDO::FETCH_ASSOC);
    $book= new Books($book);
    return $book;
  }

// request to add an book
      public function add($books){
        $req =$db->prepare('INSERT INTO Books (NameBooks,author,category,releaseDate,idUser) VALUES (:NameBooks,:author,:category,:releaseDate,:idUser)');

        // We store the values ​​of the object in the DB
        // On enregistre les valeurs de l'objet dans la DB
        $req->bindValue(':NameBooks',$books->getNameBooks());
        $req->bindValue(':author', $books->getAuthor());
        $req->bindValue(':category', $books->getCategory());
        $req->bindValue(':releaseDate',$books->getReleaseDate());
        $req->bindValue(':idUser', $books->getIdUser());
        $req->execute();
      }




      public function getDb()
        {
            return $this->db;
        }


      // Setter
      // // We make sure that we pass a PDO object as a parameter
      // On s'assure qu'on passe bien un objet PDO en paramètre
      public function setDb($db){
        $this->db = $db;
      }

}
