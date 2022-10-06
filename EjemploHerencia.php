<?php

class Auto{

private $motor_encendido = false;
private $cantidad_de_puertas;
private $marca;
private $cantidad_de_ruedas;


public function __construct($cantidad_de_puertas, $cantidad_de_ruedas, $marca){
    $this->cantidad_de_puertas = $cantidad_de_puertas;
    $this->cantidad_de_ruedas = $cantidad_de_ruedas;
    $this->marca = $marca;


}

public function encenderMotor(){
    $this->motor_encendido = true;
}

public function apagarMotor(){
    $this->motor_encendido = false;
}

public function __toString(){
    if($this->motor_encendido ==true){
        return "El auto de marca ".$this->marca."tiene".$this->cantidad_de_ruedas."ruedas".$this->cantidad_puertas."puertas y el motor esta encendido"."\n";
    }else{
        return "El auto de marca ".$this->marca."tiene".$this->cantidad_de_ruedas."ruedas".$this->cantidad_puertas."puertas y el motor esta apagado"."\n";
    
    }

    
}

}
$auto1 = New Auto("4,","4","susuki");
$auto1->encenderMotor();
echo $auto1




?>