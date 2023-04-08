<?php

session_start();

if (isset($_SESSION["usuario"])) {
  echo "Se a iniciado sesion con el nombre de usuario " . $_SESSION["usuario"] . " y tiene un status " . $_SESSION["status"];
} else {
  echo "No se a iniciado sesion";
}
