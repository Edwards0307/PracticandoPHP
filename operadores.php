<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="operadores.php" method="post">

    <label for="">Primer Numero</label>
    <input type="text" name="numeroA" id="">

    <br>
    <br>

    <label for="">Segundo Numero</label>
    <input type="text" name="numeroB" id="">

    <br>
    <br>

    <input type="submit" value="Enviar">

    <br>
    <br>

  </form>

</body>

</html>


<?php

if ($_POST) {

  $A = $_POST["numeroA"];
  $B = $_POST["numeroB"];

  $suma = $A + $B;
  $resta = $A - $B;
  $multiplicacion = $A * $B;
  $division = $A / $B;
  $residuo = $A % $B;

  echo "La suma de los dos numeros es $suma <br>";
  echo "La Resta de los dos numeros es $resta <br>";
  echo "La Multiplicaion de los dos numeros es $multiplicacion <br>";
  echo "La Division de los dos numeros es $division <br>";
  echo " El residuo de los dos numeros es $residuo <br>";
  if ($A > $B) {
    echo "El numero $A es mayor que el numero $B <br>";
  }
  if ($A < $B) {
    echo "El numero $A es menor que el numero $B <br>";
  }
  if ($A == $B) {
    echo "El numero $A es igual que el numero $B <br>";
  }
  if ($A != $B) {
    echo "El numero $A es diferente que el numero $B <br>";
  }
}


?>