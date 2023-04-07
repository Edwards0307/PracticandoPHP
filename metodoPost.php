<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metodo Post</title>
</head>

<body>

  <h1>Metodo POST<h1>

      <form action="metodoPost.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="txtNombre" id="">

        <br>
        <br>

        <label for="">Apellido</label>
        <input type="text" name="txtApellido" id="">

        <br>
        <br>

        <label for="">Edad</label>
        <input type="text" name="txtEdad" id="">

        <br>
        <br>

        <input type="submit" value="Enviar">

      </form>

</body>

</html>


<?php
//El metodo post nos permite recibir informacion del formulario HTML por Body
if ($_POST) {
  $nombre = $_POST['txtNombre'];
  $apellido = $_POST["txtApellido"];
  $edad = $_POST["txtEdad"];

  echo "Tu nombre es $nombre $apellido y tienes $edad años.";
}

?>