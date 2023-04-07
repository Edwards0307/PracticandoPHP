<?php

$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasenia = "";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia); //Aqui estamos haciendo la conexion

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Esto sirve para capturar los errores

  $sql = "SELECT * FROM `fotos` ";

  $sentencia = $conexion->prepare($sql);

  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  //print_r($resultado);

  foreach ($resultado as $foto) {
    echo $foto['nombre'] . "<br>";
  }

  $conexion->exec($sql);

  echo "Conexion establecida";
} catch (PDOException $error) {
  echo "Conexion erronea" . $error;
}
