<?php

//Defino variables privadas para la clase Cliente

abstract Class Cliente{
  Private $fecha;
  Private $email;
  Private $pass;

//Creo una función constructora con sus parámetros necesarios

abstract public function __construct($fecha,$email,$pass){
    $this->fecha = $nacimiento;
    $this->email = $email;
    $this->pass = $pass;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setFecha($fecha){
    $this->fecha= $fecha;
  }
  public function getFecha(){
    return $this->fecha;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }
