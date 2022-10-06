<?php

class Auto{
    
    
public $marca;
public $modelo;
public $Vmax;
public bool $OnOff=false;
Public bool $ArrDet=false;
public $Km=100;


    function __construct($marca, $modelo, $Vmax)
    {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->Vmax = $Vmax;
  
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setVmax($Vmax){
        $this->Vmax = $Vmax;
    }

    public function setOnOff($OnOff){
        $this->OnOff = $OnOff;

    }

    public function setArrDet($ArrDet){
        $this->ArrDet = $ArrDet;

    }
    public function setKm($Km){
        $this->Km = $Km;

    }



    public function getmarca(){
        return $this->marca;
    }

    public function getmodelo(){
        return $this->modelo;
    }

    public function getVmax(){
        return $this->Vmax;
    }

    public function getOnOff(){
        return $this->OnOff;

    }

    public function getArrDet(){
        return $this->ArrDet;

    }
    public function getKm(){
        return $this->Km;

    }

    function EncenderApagar(){
        if($this->OnOff=false){
            $this->OnOff=true;
            print "El Auto se encuentra encendido";
        }else{
            $this->OnOff=false;
            print "El auto se encuentra apagado";
        }
    }

    function ArranDetAuto(){
        if($this->ArrDet=false){
            print "primero debe encender el auto";
        }else{
            if($this->ArrDet=false){
                $this->ArrDet=true;
                print "El auto esta en movimiento";
        }
    }
}


    function Acelerar(){
        if($this->ArrDet=true){
            $array1 = range(100,120);
            $km = count($array1);
            for($i=0; $i<$km; $i++){
                $aux = $array1[$i];
                usleep(200000);
                echo "El auto esta acelerando a una velocidad de: ".$aux."Km X Hora"."\n";
                
            }
        }else{
            $this->Km=0;
        }
    }


    function DesAcelerar(){
        if($this->ArrDet=true){
            $array1 = range(50,120);
            $rev = array_reverse($array1);
            foreach($rev as $value){
            $value = $value;
            usleep(200000);
            echo "El auto esta desacelerando a una velocidad de: ".$value."Km X Hora"."\n";
        }
        }else{
            print "El auto esta avanzando"."\n";
        }
    }


    function Frenar(){
        if($this->ArrDet=true){
            $this->Km=0;
            print "¡Ahora frenamos y estamos parados: ".$this->Km." Km X Hora"."\n";
        }else{
            print "El auto debe estar en movimiento para frenar"."\n";
        }
    }
    
    function MostrarDatosAuto(){
        print "Datos del auto ". "\n";
        print "Marca: ".$this->getmarca(). "\n";
        print "Modelo: ".$this->getmodelo(). "\n";
        print "Velocidad Maxima: ".$this->getVmax(). "\n";
    }

}






?>