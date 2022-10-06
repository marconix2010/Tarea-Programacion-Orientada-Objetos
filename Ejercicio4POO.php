<?php

class fibonacci{

    public int$x=0;
    public int$y=1;
    public int$z=0;
    public int$i=0;

    function fibo($x,$y,$z,$i){
        for($i; $i<=10; $i++){
            echo $x." ";
            $z=$x + $y;
            $x = $y;
            $y = $z;
        }

    }



}

$cal= New fibonacci();
$x=0;
$y=1;
$z=0;
$i=0;
echo $cal->fibo($x,$y,$z,$i);




?>