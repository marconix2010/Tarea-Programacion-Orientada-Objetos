<?php


class Persona{

  public $nombre;
  public $apellidos;
  public $edad;


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

  public function  __toString()
  {
    return $this->nombre." ".$this->apellidos." "."de ".$this->edad." "."años";
        
  }
    
    
  

}





$nombre = (string)readline('Ingrese su nombre: '); 
$apellidos = (string)readline('Ingrese su apellido: ');
$edad = (int)readline('Ingrese su edad: ');



$persona = new Persona($nombre, $apellidos, $edad);



 if($persona->mayorEdad()){
    echo "\n"."si es mayor de edad";
  }else{
    echo "\n"." no es mayor de edad";
    }
    
    



  
?>


