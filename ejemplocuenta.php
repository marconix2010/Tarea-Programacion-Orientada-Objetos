<?php

class Cuenta {
    private static $cuenta = 1001;
    private $dni;
    private $saldo;
    private $interesAnual;
    private $interesDiario;
    
    public function __construct($dni, $sal, $intA) {
        self::$cuenta++;
        $this->dni = $dni;
        $this->saldo = $sal;
        $this->interesAnual = $intA;
    }
    
    public function actualizarSaldo() {
        $this->interesDiario = ($this->saldo * $this->interesAnual * 360) / 1200;
    }
    
    public function ingresar($deposito) {
        $this->saldo += $deposito;
    }
    
    public function retiro($retiro) {
        if($retiro > $this->saldo) {
            echo 'No tienes esa cantidad de dinero....';
        }
        else {
            $this->saldo -= $retiro;
        }
    }
    
    public function imprimir() {
        echo 'Cuenta: '.self::$cuenta;
        '\n';
        echo 'D.N.I: '.$this->dni;
        '\n';
        echo 'Saldo: $'.$this->saldo;
        '\n';
        echo 'Interes: '.$this->interesDiario;
        '\n';
    }
    
}

$persona = new Cuenta(38206856, 1000, 3);
$persona->ingresar(200);
$persona->retiro(1500);
$persona->actualizarSaldo();
$persona->imprimir();



?>