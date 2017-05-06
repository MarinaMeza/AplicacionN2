<!--Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas: “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.-->

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