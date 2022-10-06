<?php


class Coche{

    public string $marca;
    public string $modelo;
    public string $color;
    public int $precio;
    public string $placa;
    public int $id;

    public function __construct($id,$marca,$modelo,$color,$precio,$placa){
        $this->id=$id;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->color=$color;
        $this->precio=$precio;
        $this->placa=$placa;

    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getColor(){
        return $this->color;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getPlaca(){
        return $this->placa;
    }
    public function setPlaca($placa){
        $this->placa=$placa;
    }
    
    public function printCoche(){
        echo "Color: ".$this->getColor();
        echo"\n";
        echo "Precio: ".$this->getPrecio();
        echo"\n";
        echo "Modelo: ".$this->getModelo();
        echo"\n";
        echo "Marca: ".$this->getMarca();
        echo"\n";
        echo "Placa: ".$this->getPlaca();
        echo"\n";
    
    }
}

$auto1 = New Coche(12,"Audi ","A4 ","Azul ",3000,"USND123");
$auto1->marca="Nissan";
$auto1->placa="P125M5";
$auto1->id="123";
echo $auto1->id;
echo"\n";
echo $auto1->marca;
echo"\n";
echo $auto1->modelo;
echo"\n";
echo $auto1->precio;
echo"\n";
echo $auto1->placa;
echo"\n";




//echo $auto1->printCoche();




?>