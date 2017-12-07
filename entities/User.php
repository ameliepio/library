<?php

class User
{
    protected $id;
    protected $idUser;
    protected $NameUser;
    protected $Mail;
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


    /**
     * Get the value of Name User
     *
     * @return mixed
     */
    public function getNameUser()
    {
        return $this->NameUser;
    }

    /**
     * Set the value of Name User
     *
     * @param mixed NameUser
     *
     * @return self
     */
    public function setNameUser($NameUser)
    {

        if (is_string($NameUser)&& strlen($NameUser)<= 50)
        {
        $this->NameUser = $NameUser;

        return $this;
    }
  }



    /**
     * Get the value of Mail
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * Set the value of Mail
     *
     * @param mixed Mail
     *
     * @return self
     */
    public function setMail($Mail)
    {
          if (is_string($Mail)&& strlen($Mail)<= 50)

      {

        $this->Mail = $Mail;

        return $this;
    }
  }

}
