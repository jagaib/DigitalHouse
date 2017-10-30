<?php
$host = "p:localhost";
$user = "root";
$pass = "root";
$database='mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port:3306;';
try {
$aOpciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$db = new PDO( $database, $user, $pass, $aOpciones);

}
catch (Exception $e) {
  echo $e->getMessage();
}

?>

?>
