<!--Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.-->

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