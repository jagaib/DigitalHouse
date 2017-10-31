<?php

Class Empresa extends Cliente {
  private $cuit;
  private $razon;

    public function __construct( string $razon, int $cuit){
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
