<?php

    include_once('variables.php');
    verificar:
    echo (true) ?
             ((($i==0 || $i==2) && $opcion==0) ? "$lista[$i]<br>"
             :((($i==1 || $i==3) && $opcion==1)? "$lista[$i]<br>"
             : null)) : null;
    $i++;
    if($i < count($lista)) goto verificar;



    // $i = (int) 1;
    // $g = (int) 1;
    // $con = (int) 2;
    // saltar:
    // for ($i; $i <= 10;) { 
    //     echo "<b>Hola soy el for 1 $i</b> <br>";
    //     $i++;
    //     for ($g; $g <= 20; $g++) {
    //         if(!($g <= $con)) { if($i==3){goto saltar2;}  $con+=2; goto saltar;}
    //         echo "Hola soy el for 2 $g <br>";
    //     }
    // }
    // saltar2:

    // $i = (int) 1;
    // $g = (int) 1;
    // $limite = true;
    // saltar1:
    // for ($i; $limite;) { 
    //     echo "For saltar1 $i <br>";
    //     $i++;
    //     if($i==6){ $limite=false; goto saltar1;}
    //     saltar2:
    //     for ($g; $g < 10; $g++) { 
    //         echo "For saltar2 $g <br>";
    //         if($g==2){ $g=999; goto saltar2;}
    //     }
    // }
    





    // $i = (int) 0;
    // condicion:
    // if($i < 10){
    //     echo <<<NUMEROS
    //         $i
    //     NUMEROS;
    //     $i++;
    //     goto condicion;
    // }

    // $i = (int) 1;
    // $avance = (int) 2;
    // $destino = (int) 12;
    // $limite = (bool) true;
    // for ($i; $limite;) {
    //     $limite = (bool) ($i < $destino);
    //     echo <<<NUMEROS
    //         $i
    //     NUMEROS;
    //     (($i + $avance) < $destino ) ? $i += $avance : $limite = false;
    // }




    // function condicion(int $p1){
    //     return $p1 < 5;
    // }

    // $nombre = (string) null;
    // var_dump(isset($nombre));



    // $edad = (string) '';
    // if(!isset($edad)) echo "La edad no existe <br>";
    // if(is_null($edad)) echo "La edad existe pero su tipo de dato y dato es null <br>";
    // if(empty($edad)) echo "la variable edad existe y su dato en vacio <br>";