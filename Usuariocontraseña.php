<?php

include "DatosdeUsuario.php";



class Usuario extends Persona{


    public $usuario;
    public $contraseña;

    function __construct($nombre,$apellidos,$edad,$usuario,$contraseña){
      parent::__construct($nombre,$apellidos,$edad);
      
      $this->usuario = $usuario;
      $this->contraseña = $contraseña;


      
      
    }

    public function getUsuario()
    {
      return $this->usuario;
    }
    public function getContraseña()
    {
      return $this->contraseña;
    }
    

    public function setUsuario($usuario)
    {
        $this->usuario=$usuario;
    }
    public function contraseña($contraseña)
    {
        $this->contraseña=$contraseña;
    }

    
    


}

$usuario=(string)readline('Ingrese su usuario: '); 
$contraseña=(string)readline('Ingrese su contraseña: ');



$usuario1 = New Usuario($nombre, $apellidos, $edad, $usuario, $contraseña);



  if($usuario1->mayorEdad()){
    echo "estos son sus datos: ".print_r($usuario1);
  }else{
    echo  " no es mayor de edad y no se pueden mostrar sus datos";
    }
?>