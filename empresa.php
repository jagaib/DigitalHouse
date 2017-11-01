<?php
include_once("cliente.php");

Class Empresa extends Cliente {
  private $cuit;
  private $razon;

  function __construct($fecha,$email,$pass,$razon,$cuit) {
  parent::setFecha($fecha);
  parent::setEmail($email);
  parent::setPass($pass);
      $this->nombre=$razon;
      $this->cuit=$cuit;
    }

    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }

    public function setRazon(string $razon) {
      $this->razon = $razon;
    }

    public function getRazon() {
      return $razon->razon;
    }
  }



 ?>
