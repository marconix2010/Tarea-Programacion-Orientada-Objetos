<?php

class Persona{

  private $nombre;
  private $apellidos;
  private $edad;


  function __construct($nombre, $apellidos, $edad)
  {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->edad = $edad;

  }


  function _get($propiedad)
  {
    if(property_exists($this, $propiedad))
    {
      return $this->$propiedad;
    }
  }


  function _set($propiedad, $valor)
  {
    if(property_exists($this, $propiedad))
    {
      $this->$propiedad=$valor;
    }
  }  

  function mayorEdad()
  {
    return $this->edad >= 18;
  }



  function nombreCompleto(){
    return $this->nombre." ".$this->apellidos;
  }

}





$nombre = (string)readline('Ingrese su nombre: '); 
$apellidos = (string)readline('Ingrese su apellido: ');
$edad = (int)readline('Ingrese su edad: ');  

$persona = new Persona($nombre, $apellidos, $edad);

/*$age=$persona->getEdad();
print_r ($age);
*/

if($persona->mayorEdad()){
  echo $persona->nombreCompleto(). " es mayor de edad";
}else{
    echo $persona->nombreCompleto(). " no es mayor de edad";
  }
  
?>