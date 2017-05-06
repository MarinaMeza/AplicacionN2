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