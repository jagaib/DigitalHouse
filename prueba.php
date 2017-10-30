<?php
declare(strict_types = 1);
require_once 'usuarios.php';
$fecha = ("d-m-a");
$usuario1= new usuario("eluser", $fecha = "20 - 07 - 1980" ,"un@email");

var_dump($usuario1);
$usuario1->setNombre("luis");

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <p>El nombre del usuario es <?= $usuario1->saludar() ; ?></p>

  </body>
</html>
