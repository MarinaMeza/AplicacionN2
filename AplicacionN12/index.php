<!--Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.-->

<?php

    function invertirPalabra($pPalabra){/*
        for ($i=strlen($pPalabra)-1; $i >= 0; $i--) { 
        
            echo $pPalabra[$i];
        }*/
        echo strrev($pPalabra);
    }
    
    $palabra = 'HOLA';
    
    invertirPalabra($palabra);
?>