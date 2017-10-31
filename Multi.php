<?php
include_once ("empresa.php");

Class Multinacional extends Empresa{
  private $pais;

  public function setPais(string $pais) {
    $this->pais = $pais;
    }

  public function getPais() {
    return $this->pais;
    }

 ?>
