<?php 
class Pedido {
    private $idPedido;
    private $nombre;
    private $apellido;
    private $usuario;
    private $mail;
    private $lugar_entrega;
    private $localidad;
    private $provincia;
    private $cod_postal;
    private $forma_pago;
    private $tarj_titular;
    private $tarj_numero;
    private $tarj_vencimiento;
    private $tarj_clave;

    function __construct($nombre, $apellido, $usuario, $mail, $lugar_entrega, $localidad, $provincia, $cod_postal, $forma_pago, $tarj_titular, $tarj_numero, $tarj_vencimiento, $tarj_clave) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->usuario=$usuario;
        $this->mail=$mail;
        $this->lugar_entrega=$lugar_entrega;
        $this->localidad=$localidad;
        $this->provincia=$provincia;
        $this->cod_postal=$cod_postal;
        $this->forma_pago=$forma_pago;
        $this->tarj_titular=$tarj_titular;
        $this->tarj_numero=$tarj_numero;
        $this->tarj_vencimiento=$tarj_vencimiento;
        $this->tarj_clave=$tarj_clave;        
    }
    

    /**
     * Get the value of idPedido
     */ 
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of lugarEntrega
     */ 
    public function getLugarEntrega()
    {
        return $this->lugar_entrega;
    }

    /**
     * Set the value of lugar_entrega
     *
     * @return  self
     */ 
    public function setLugarEntrega($lugar_entrega)
    {
        $this->lugar_entrega = $lugar_entrega;

        return $this;
    }

    /**
     * Get the value of localidad
     */ 
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of localidad
     *
     * @return  self
     */ 
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of provincia
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */ 
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of codPostal
     */ 
    public function getCodPostal()
    {
        return $this->cod_postal;
    }

    /**
     * Set the value of codPostal
     *
     * @return  self
     */ 
    public function setCodPostal($cod_postal)
    {
        $this->cod_postal = $cod_postal;

        return $this;
    }

    /**
     * Get the value of formaDePago
     */ 
    public function getFormaPago()
    {
        return $this->forma_pago;
    }

    /**
     * Set the value of formaDePago
     *
     * @return  self
     */ 
    public function setFormaPago($forma_pago)
    {
        $this->forma_pago = $forma_pago;

        return $this;
    }

    /**
     * Get the value of tarjTitular
     */ 
    public function getTarjTitular()
    {
        return $this->tarj_titular;
    }

    /**
     * Set the value of tarjTitular
     *
     * @return  self
     */ 
    public function setTarjTitular($tarj_titular)
    {
        $this->tarj_titular = $tarj_titular;

        return $this;
    }

    /**
     * Get the value of tarjNumero
     */ 
    public function getTarjNumero()
    {
        return $this->tarj_numero;
    }

    /**
     * Set the value of tarjNumero
     *
     * @return  self
     */ 
    public function setTarjNumero($tarj_numero)
    {
        $this->tarj_numero = $tarj_numero;

        return $this;
    }

    /**
     * Get the value of tarjVto
     */ 
    public function getTarjVencimiento()
    {
        return $this->tarj_vencimiento;
    }

    /**
     * Set the value of tarjVto
     *
     * @return  self
     */ 
    public function setTarjVencimiento($tarj_vencimiento)
    {
        $this->tarj_vencimiento = $tarj_vencimiento;

        return $this;
    }

    /**
     * Get the value of tarjClave
     */ 
    public function getTarjClave()
    {
        return $this->tarj_clave;
    }

    /**
     * Set the value of tarjClave
     *
     * @return  self
     */ 
    public function setTarjClave($tarj_clave)
    {
        $this->tarj_clave = $tarj_clave;

        return $this;
    }
}

?>