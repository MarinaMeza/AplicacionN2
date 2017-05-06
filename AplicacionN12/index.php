<?php

    function invertirPalabra($pPalabra){
        for ($i=strlen($pPalabra)-1; $i >= 0; $i--) { 
        
            echo $pPalabra[$i];
        }
    }
    
    $palabra = 'HOLA';
    
    invertirPalabra($palabra);
?>