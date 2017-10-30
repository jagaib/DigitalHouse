<?php
require('conexion.php');
$db->beginTransaction();

$sql_generos = 'SELECT id , name from genres ORDER BY name';
$stmt = $db-> query($sql_generos);
$generos = $stmt ->fetchAll(PDO::FETCH_ASSOC);


if ($_POST) {
  $sql_insert_peli = 'INSERT into movies (title, awards) values = (:title, :awards )';
  $stmt = $db->prepare($sql_insert_peli);
  $stmt->bindValue(':titulo, $_POST['titulo']', PDO::PARAM_STR);
  $stmt->bindValue(':awards, $_POST['awards']', PDO::PARAM_INT);
  $stmt->excecute([
    $_POST['titulo'],
    $_POST['awards'],
  ]);
$uluimoId = $db->lastInsertId();
echo "peli insertada " .$_POST['titulo'. " ".$ultimoId;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>

    <ul>
        <?php foreach ($variable as  $value): ?>
          <li></li>
        <?php endforeach; ?>
    </ul>

  </body>
</html>
