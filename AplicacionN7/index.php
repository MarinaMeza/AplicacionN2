<!--Generar una aplicación que permita cargar los primeros 10 números impares en un Array. Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando las estructuras while y foreach.-->

<?php

    $array = array();
    
    for($i=0;$i<10;$i++)
    {
        if(($i%2)!=0)
        {
            array_push($array,$i);
        }
    }
    
    echo "for <br>";
    
    for($i=0;$i<count($array);$i++)
    {
        echo $array[$i]."<br>";
    }
    
    echo "while <br>";
    
    $i=0;
    while($i!=count($array))
    {
        echo $array[$i]."<br>";
        $i++;
    }
    
    echo "foreach <br>";
    
    foreach ($array as $key)
    {
        echo $key."<br>";
    }




?>