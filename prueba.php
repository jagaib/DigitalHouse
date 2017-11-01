<?php
declare(strict_types = 1);
require_once 'usuarios.php';
require_once 'tipo_de_cuentas.php';
require_once 'cuenta.php';
$cbu = 100800900;
$cuit = 20567890;
$nombre= "userB";
$balance= 0;
$usuario1= new Black($nombre, $cbu,$cuit,$balance);
echo "<pre>";
var_dump($usuario1);
 echo "</pre>";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    </title>
  </head>
  <body>
    <p>El nombre del usuario es <?= $usuario1->getNombre() ; ?></p>
<p>El  saldo del usuario es <?= $usuario1->debitar(654,"cajero") ; ?></p>
  </body>
</html>
