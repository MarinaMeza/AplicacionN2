<!--Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres lapiceras.-->

<?php

    $v=array();

    $v[1]=90;
    $v[30]=7;
    $v['e']=99;
    $v['hola']= 'mundo';

    foreach ($v as $key)
    {
        echo $key."<br>";
    }
?>