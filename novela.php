<?php

require("Libro2.php");
class Novela extends Librito2
{
    public function __construct($titulo,$autor,$precio,$curso,$facultad,$novela){
        parent::__construct($titulo,$autor,$precio,$curso,$facultad);
        $this->novela=$novela;
    }
    
    public function getNovela(){
        return $this->novela;
    }

    public function setNovela($novela){
        $this->novela=$novela;
    }

    function MostrarDatosdeLibro(){
        print "El tipo de Novela es: ".$this->getNovela();
    }

}

$novela1 = New Novela("Lo que el viento se llevo","Margaret Michell",50,"Fantasia","Filosofia","romantica",);
echo $novela1->MostrarDatosdeLibro();



?>