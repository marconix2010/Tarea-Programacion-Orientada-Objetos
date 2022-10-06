<?php

require("Libro1.php");
class Librito2 extends Librito
{
    public function __construct($titulo, $autor,$precio,$curso,$facultad){
        parent::__construct($titulo,$autor,$precio,$curso);
        $this->facultad=$facultad;
    }
    
    public function getFacultad(){
        return $this->facultad;
    }

    public function setFacultad($facultad){
        $this->facultad=$facultad;
    }

    function MostrarDatosdeLibro(){
        print "La faculta del Libro es: ".$this->getFacultad();
    }

}

$librito2 = New Librito2("Lo que el viento se llevo","Margaret Michell",50,"Fantasia","Filosofia");
echo $librito2->MostrarDatosdeLibro();


?>


