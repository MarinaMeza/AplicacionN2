<!--Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la función rand). Mediante una estructura condicional, determinar si el promedio de los números son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el resultado.-->

<?php

    $array=array();
    $acumulador=0;

    for($i=0;$i<5;$i++)
    {
        array_push($array,rand(1,10));
    }

    for($i=0;$i<5;$i++)
    {
        $acumulador+=$array[$i];
    }

    $acumulador=$acumulador/5;

    var_dump($array);

    echo "<br>Promedio: ".$acumulador."<br>";
    
    if($acumulador>6)
    {
        echo "El promedio de los numeros es mayor a 6 ";
    }
    else if($acumulador==6)
    {
        echo "El promedio de los numeros es igual a 6 ";
    }
    else
    {
        echo "El promedio de los numeros es menor a 6 ";
    }
?>