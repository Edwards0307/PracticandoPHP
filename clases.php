<?php

class persona
{
  public $nombre; //propiedades
  private $edad;
  protected $altura;

  public function asignarNombre($nuevoNombre) //acciones o metodos
  {
    $this->nombre = $nuevoNombre;
  }

  public function imprimirEdad()
  {
    $this->edad = 32;
    return $this->edad;
  }
}

class cargo extends persona
{
  public $puesto;

  public function asignarPuesto($nuevoPuesto)
  {

    $this->puesto = $nuevoPuesto;
  }

  public function imprimirPresentacion()
  {
    echo "Hola soy " . $this->nombre . " tengo " . $this->imprimirEdad() . " años y soy " . $this->puesto;
  }
}


$objetoAlumno1 = new cargo(); //Instancia o creacion de un objeto
$objetoAlumno1->asignarNombre("Edwards "); //Llamando un metodo
$objetoAlumno1->asignarPuesto("Ingeniero de Sistemas ");

$objetoAlumno1->imprimirPresentacion();
