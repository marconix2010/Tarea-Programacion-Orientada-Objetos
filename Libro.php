<?php

class Libro{
    
    
    public $titulo;
    public $autor;
    public $precio;
    
    
    public function __construct($titulo, $autor)
        {
          $this->titulo = $titulo;
          $this->autor = $autor;
          
      
        }

        public function getTitulo(){
            return $this->titulo;
        }
    
        public function getAutor(){
            return $this->autor;
        }
    
        public function getPrecio(){
            return $this->precio;
        }
    
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
    
        public function setAutor($autor){
            $this->autor = $autor;
        }
    
        public function setPrecio($precio){
            $this->precio = $precio;
        }
    

        public function mostrar($titulo,$autor,$precio){
            echo "El Titulo del Libro es: ".$titulo."\n";
            echo "El Autor del Libro es: ".$autor."\n";
            echo "El Precio del Libro es: ".$precio."\n";

        }

}

$libro1 = New Libro("Lo que el viento se llevo","Margaret Michell");
$libro1->mostrar("Lo que el viento se llevo","Margaret Michell",50);



?>