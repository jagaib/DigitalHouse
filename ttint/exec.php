<?php

include_once("persona.php");
include_once("mascota.php");
include_once("animal.php");

$dario = new Persona("Dario", "Sus");

$dario->agregarHobby("Netflix");
$dario->agregarHobby("Asados");

$oliverio = new Mascota("Oliverio", "Gato", "Miaaaaau");

$dario->setMascota($oliverio);

$javi = new Persona("Javi", "Herrera");

$dario->jugarConAlguien($oliverio);


if ($oliverio instanceof Animal) {
  echo "Soy true";
}

?>
