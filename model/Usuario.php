<?php 
class User {
    private $idUser;
    private $user;
    private $password;
    private $name_urname;
    
    function __construct($user, $password, $name_urname) {
        $this->user=$user;    
        $this->password=$password;    
        $this->name_urname=$name_urname;    
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of clave
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of clave
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nombreYApellido
     */ 
    public function getName_Urname()
    {
        return $this->name_urname;
    }

    /**
     * Set the value of nombreYApellido
     *
     * @return  self
     */ 
    public function setName_Urname($name_urname)
    {
        $this->name_urname = $name_urname;

        return $this;
    }
}
?>