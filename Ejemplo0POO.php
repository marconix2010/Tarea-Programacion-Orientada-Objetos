<?php


class Coche{
    public $color;
    private $precio;
    public $modelo;
    public $marca;


    public function __construct($color,$precio, $modelo, $marca){

        $this->color=$color;
        $this->precio=$precio;
        $this->modelo=$modelo;
        $this->marca=$marca;

    }
    

    public function setColor($color){
        $this->color = $color;
    }

    private function setPrecio($precio){
        $this->precio = $precio;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    function printCoche(){
        echo "Color: ".$this->getColor();
        echo"\n";
        echo "Precio: ".$this->getPrecio();
        echo"\n";
        echo "Modelo: ".$this->getModelo();
        echo"\n";
        echo "Marca: ".$this->getMarca();
        echo"\n";
    
    }
    
}



$auto1= New Coche("Verde","5000","A4","Audi");
$auto2= New Coche("Morado","5000","A5","Honda");
$auto3= New Coche("Morado","8000","A5","Honda");
$auto4= New Coche("Morado","9000","A5","Honda");

$auto1->setColor("Dorado");
$auto2->setModelo("C5");
$auto3->setMarca("Kawasaki");
$auto4->setColor("Amarillo");

$auto1->printCoche();
echo"\n";
$auto2->printCoche();
echo"\n";
$auto3->printCoche();
echo"\n";
$auto4->printCoche();


?>