<?php

class Books
{
    private $id;
    private $books;
    private $NameBooks;
    private $author;
    private $category;
    private $abstract;
    private $releaseDate;
    private $idUser;
    /**
     * Article constructor.
     * @param $donnees
     */
    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }
    /**
     * Fill the object with data
     * @param array $donnees
     */
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = (int)$id;

        return $this;
    }


    /**
     * Get the value of Name Books
     *
     * @return mixed
     */
    public function getNameBooks()
    {
        return $this->NameBooks;
    }

    /**
     * Set the value of Name Books
     *
     * @param mixed NameBooks
     *l
     * @return self
     */
    public function setNameBooks($NameBooks)
    {
if (is_string($NameBooks)&& strlen($NameBooks)<= 50)
{

        $this->NameBooks = $NameBooks;

        return $this;
    }
  }
    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthors()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed author
     *
     * @return self
     */
    public function setAuthor($author)
    {
if (is_string($author)&& strlen($author)<= 100)

    {
        $this->author = $author;

        return $this;
    }
}

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategories()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
      if (is_string($category)&& strlen($category)<= 100)
      {
        $this->category = $category;

        return $this;
    }
}

    /**
     * Get the value of Abstract
     *
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set the value of Abstract
     *
     * @param mixed abstract
     *
     * @return self
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    /**
     * Get the value of Release Date
     *
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set the value of Release Date
     *
     * @param mixed releaseDate
     *
     * @return self
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get the value of Id User
     *
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of Id User
     *
     * @param mixed idUser
     *
     * @return self
     */
    public function setIdUser($idUser)
    {
        $this->idUser = (int)$idUser;

        return $this;
    }

}
