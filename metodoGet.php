<?php
if ($_GET) {
  //Recibe los parametos por query
  $nombre = $_GET["nombre"];
  $apellido = $_GET["apellido"];
  $edad = $_GET["edad"];

  echo "Tu nombre es $nombre $apellido y tienes $edad años";
}
