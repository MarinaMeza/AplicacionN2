<?php
    function esPar($pNumero){
        $rta;

        if($pNumero%2==0){
            $rta = TRUE;
        }else{
            $rta = FALSE;
        }

        return $rta;
    }

    function esImpar($pNumero){
        $rta;

        if($pNumero%2==0){
            $rta = FALSE;
        }else{
            $rta = TRUE;
        }

        return $rta;
    }
    
    esPar(7);
?>