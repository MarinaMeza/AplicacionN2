<?php

echo date("d")." de ".date("m")." de ".date("Y")."<br>";

echo date("d")." de ";
switch(date("m"))
{
    case '1':
        echo "Enero";
        break;
    case '2':
        echo "Febrero";
        break;
    case '3':
        echo "Marzo";
        break;
    case '4':
        echo "Abril";
        break;
    case '5':
        echo "Mayo";
        break;
    case '6':
        echo "Junio";
        break;
    case '7':
        echo "Julio";
        break;
    case '8':
        echo "Agosto";
        break;
    case '9':
        echo "Septiembre";
        break;
    case '10':
        echo "Octubre";
        break;
    case '11':
        echo "Noviembre";
        break;
    case '12':
        echo "Diciembre";
        break;
}
echo date("Y");

echo "<br>".date("d/m/Y")."<br>";

switch (date('m')) {
    case '1':
    case '2':
    case '12':
        echo "Es verano";
        break;
    case '3':
    case '4':
    case '5':
        echo "Es otoño";
        break;
    case '6':
    case '7':
    case '8':
        echo "Es invierno";
        break;
    case '9':
    case '10':
    case '11':
        echo "Es primavera";
        break;
}


?>