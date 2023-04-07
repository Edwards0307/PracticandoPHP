<?php

$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasenia = "";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia); //Aqui estamos haciendo la conexion

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Esto sirve para capturar los errores

  $sql = "INSERT INTO `fotos` (`id`, `nombre`, `direccion`) VALUES (NULL, 'Prueba', 'otro.jpg')"; // Con esta linea estamos ingresando datos a la tabla que creamos

  $conexion->exec($sql);

  echo "Conexion establecida";
} catch (PDOException $error) {
  echo "Conexion erronea" . $error;
}
