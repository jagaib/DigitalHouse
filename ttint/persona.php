<?php

include_once("mascota.php");
include_once("jugable.php");

class Persona implements Jugable {
  protected $nombre;
  protected $apellido;
  protected $hobbies;
  protected $mascota;

  public function __construct($nombre, $apellido) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->hobbies = [];
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getApellido() {
    return $this->apellido;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getHobbies() {
    return $this->hobby;
  }

  public function agregarHobby($hobby) {
    $this->hobbies[] = $hobby;
  }

  public function getMascota() {
    return $this->mascota;
  }

  public function setMascota(Mascota $mascota) {
    $this->mascota = $mascota;
  }

  public function describirse() {
    echo "Hola me llamo " . $this->nombre . " " . $this->apellido;
    echo "<br>";
    if ($this->mascota) {
      echo "Tengo una mascota llamada " . $this->mascota;
      echo "<br>";
    }
  }

  public function jugar() {
    echo "Iupiiiii <br>";
  }

  public function jugarConAlguien(Jugable $alguien) {
    $this->jugar();
    $alguien->jugar();
  }



}

?>
