<?php

include_once("animal.php");
include_once("jugable.php");

class Mascota extends Animal implements Jugable {
  protected $nombre;

  public function __construct($nombre, $especie, $ruido) {
    $this->nombre = $nombre;
    parent::__construct($especie, $ruido);
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getEspecie() {
    return strtoupper($this->especie);
  }

  public function jugar() {
    echo $this->ruido; echo "<br>";
    echo $this->ruido; echo "<br>";
    echo $this->ruido; echo "<br>";
  }

  public function respirar() {

  }
}

?>
