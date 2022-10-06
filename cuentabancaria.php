<?php

class cuentabancaria{
    
    
    private int $dui;
    private int $saldo;
    private $nombretitular;
    private $apellidostitular;
    private int $numerocuentaBancaria;
    private $tipocuenta;


    function __construct($nombretitular, $apellidostitular, $numerocuentaBancaria, $tipocuenta,  $dui, $saldo)
    {
      $this->nombretitular = $nombretitular;
      $this->apellidostitular = $apellidostitular;
      $this->numerocuentaBancaria = $numerocuentaBancaria;
      $this->tipocuenta = $tipocuenta;
      $this->dui = $dui;
      $this->saldo = $saldo;
  
    }

    public function setnombretitular($nombretitular){
        $this->nombretitular = $nombretitular;
    }

    private function setapellidostitular($apellidostitular){
        $this->apellidostitular = $apellidostitular;
    }

    public function setnumerocuentaBancaria($numerocuentaBancaria){
        $this->numerocuentaBancaria = $numerocuentaBancaria;
    }

    public function settipocuenta($tipocuenta){
        $this->tipocuenta = $tipocuenta;
    }


    public function getnombretitular(){
        return $this->nombretitular;
    }

    public function getapellidostitular(){
        return $this->apellidostitular;
    }

    public function getnumerocuentaBancaria(){
        return $this->numerocuentaBancaria;
    }

    public function gettipocuenta(){
        return $this->tipocuenta;
    }

    
    public function ingresar($deposito) {
        $this->saldo += $deposito;
    }
    
    public function retiro($retiro) {
        if($retiro > $this->saldo) {
            echo 'No tienes esa cantidad de dinero para retirar'."\n";
        }
        else {
            $this->saldo -= $retiro;
        }
    }
    

    function printcuentabancaria(){
        echo 'nombre del titular: '.$this->getnombretitular();
        echo "\n";
        echo 'apellidos del titular: '.$this->getapellidostitular();
        echo "\n";
        echo 'numero de cuenta Bancaria: '.$this->getnumerocuentaBancaria();
        echo "\n";
        echo 'tipo de cuenta: '.$this->gettipocuenta();
        echo "\n";
        echo 'D.U.I: '.$this->dui;
        echo "\n";
        echo 'saldo actual: '.$this->saldo;
        


        

    
    }




}



$usuario1 = new cuentabancaria('Juan Carlos ', 'Gonzales Guzman ', 25840, 'Cuenta de Ahorros', 22102805, 15000);
echo "\n";
$usuario1->ingresar(200);
$usuario1->retiro(1500);
$usuario1->printcuentabancaria();
echo "\n";
echo "\n";
$usuario2 = new cuentabancaria('Juan Pablo ', 'Guzman Guzman ', 43208, 'Cuenta de Ahorros', 2230480, 2500);
echo "\n";
$usuario2->ingresar(2000);
$usuario2->retiro(6500);
$usuario2->printcuentabancaria();
echo "\n";
echo "\n";
$usuario3 = new cuentabancaria('Maria Antonia ', 'Serrano Peralta ', 55789, 'Cuenta de Ahorros', 1025897, 3500);
echo "\n";
$usuario3->ingresar(3600);
$usuario3->retiro(5800);
$usuario3->printcuentabancaria();


?>