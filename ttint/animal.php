<?php

abstract class Animal {
  protected $especie;
  protected $ruido;

  public function __construct($especie, $ruido) {
    $this->ruido = $ruido;
    $this->especie = $especie;
  }

  public abstract function respirar();

  public function getEspecie() {
    return $this->especie;
  }

  public function setEspecie($especie) {
    $this->especie = $especie;
  }

  public function getRuido() {
    return $this->ruido;
  }

  public function setRuido($ruido) {
    $this->ruido = $ruido;
  }
}

?>
