<?php
include_once("cliente.php");

Class Persona extends Cliente {
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;


    public function setApellido(string $apellido){
      $this->apellido = $apellido;
    }
    public function getApellido(){
      return $this->apellido;
    }
    public function setDocumento(int $documento){
      $this->documento = $documento;
    }
    public function getDocumento(){
      return $this->documento;
    }
    public function setNacimiento(string $nacimiento){
      $this->nacimiento = $nacimiento;
    }
    public function getNacimiento(){
      return $this->nacimiento;
    }

}
 ?>
