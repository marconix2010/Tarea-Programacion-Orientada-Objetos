<?php

include "Auto.php";

$auto1= New Auto("Honda", "1988", 200);

while(true){
    print "====MENU===="."\n";
    print "Controles del Auto: "."\n";
    print "1. Encender/Apagar "."\n";
    print "2. Arrancar/Detener "."\n";
    print "3. Acelerar"."\n";
    print "4. Desacelerar"."\n";
    print "5. Frenar"."\n";
    print "6. Ver informacion del Auto";
    "\n";

    $opc = readline();

    switch($opc){
    case 1:
        $auto1->EncenderApagar();
            break;
        case 2:
        $auto1->ArranDetAuto();
            break;
            case 3:
                $auto1->Acelerar();
                break;
                    case 4:
                    $auto1->DesAcelerar();
                    break;
                        case 5:
                            $auto1->Frenar();
                            break;
                                case 6:
                                $auto1->MostrarDatosAuto();
                                break;

    }

}




?>