<?php
session_start()

if (estaLogueado()) {
  $usuario= traerId($_SESSION[userId]);
}
 ?>
