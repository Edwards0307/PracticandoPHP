<?php
$txtnombre = "";
$rdgLenguaje = "";

if ($_POST) {
  $txtnombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
  $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>

  <?php if ($_POST) { ?>
    <h1>Tu nombre es <?php echo $txtnombre . " y te gusta el lenguaje " . $rdgLenguaje ?> </h1>
  <?php } ?>

  <form action="formulario.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" id="">
    <br>
    <br>
    <label>Cual lenguaje te gusta?</label>
    <br>
    <br>
    <label>Php:</label>
    <input type="radio" name="lenguaje" value="php" id="">
    <br>
    <label>React:</label>
    <input type="radio" name="lenguaje" value="react" id="">
    <br>
    <label>JavaScript:</label>
    <input type="radio" name="lenguaje" value="javascript" id="">
    <br>
    <br>
    <br>
    <input type="submit" value="Enviar">

  </form>



</body>

</html>