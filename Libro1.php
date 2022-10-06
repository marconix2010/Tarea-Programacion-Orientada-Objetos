<?php

require("Libro.php");
class Librito extends Libro
{
    public function __construct($titulo, $autor,$precio,$curso){
        parent::__construct($titulo,$autor,$precio);
        $this->curso=$curso;
    }
    
    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($Curso){
        $this->curso=$curso;
    }

    function MostrarDatosdeLibro(){
        print "El curso del Libro es: ".$this->getCurso(). "\n";
    }

}

$librito1 = New Librito("Lo que el viento se llevo","Margaret Michell",50,"Fantasia");
echo $librito1->MostrarDatosdeLibro();





?>