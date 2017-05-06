<?php

    function validarPalabra($pPalabra,$pMax){

        $listado = array("recuperatorio","parcial","programacion");

        if(strlen($pPalabra)<=$pMax){
            echo "OOOOOO";
        }
        for ($i=0; $i < count($listado); $i++) { 
            if(strtolower($pPalabra)==$listado[$i])
            {
                $rta = 1;
            }else{
                $rta = 0;
            }
        }
        return $rta;
    }
    
    $palabra = 'pogramacion';
    $max = 15;
    
    validarPalabra($palabra,$max);

    /*
    if(validarPalabra($palabra,$max))
    {
        echo "si";
    }else{
        echo "no";
    }*/
?>