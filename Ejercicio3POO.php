<?php


class Libro{

    public string $titulo;
    public string $autor;
    public int $paginas;
  
  
    public function __construct($titulo,$autor,$paginas){
      
      $this->titulo=$titulo;
      $this->autor=$autor;
      $this->paginas=$paginas;
    }

    
  
    public function getTitulo()
    {
      return $this->titulo;
    }
    public function getAutor()
    {
      return $this->autor;
    }
    public function getPaginas()
    {
      return $this->paginas >=200;
    }
    

    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function setAutor($autor){
        $this->autor=$autor;
    }
    public function setPaginas($paginas){
        $this->paginas=$paginas;
        
        
    }
    
    public function  __toString()
    {
        return "El libro ".$this->getTitulo()." ". " creado por el autor ".$this->getAutor()." ". " tiene ".$this->getPaginas()." paginas";
        
    }
    
}



$libro1 = New Libro("'El principito'","'Saint Exupery'",150);

echo $libro1->__toString();

if($libro1->getPaginas()){
  echo $libro1->getPaginas()."....Es un libro grande";
}else{
    echo $libro1->getPaginas(). "....Es un libro chico";
  }









?>