<?php

echo date("d")." de ".date("m")." de ".date("Y")."<br>";

switch(date("m"))
{
    case '1':
        echo date("d")." de "."Enero"." de ".date("Y");
        break;
    case '2':
        echo date("d")." de "."Febrero"." de ".date("Y");
        break;
    case '3':
        echo date("d")." de "."Marzo"." de ".date("Y");
        break;
    case '4':
        echo date("d")." de "."Abril"." de ".date("Y");
        break;
    case '5':
        echo date("d")." de "."Mayo"." de ".date("Y");
        break;
    case '6':
        echo date("d")." de "."Junio"." de ".date("Y");
        break;
    case '7':
        echo date("d")." de "."Julio"." de ".date("Y");
        break;
    case '8':
        echo date("d")." de "."Agosto"." de ".date("Y");
        break;
    case '9':
        echo date("d")." de "."Septiembre"." de ".date("Y");
        break;
    case '10':
        echo date("d")." de "."Octubre"." de ".date("Y");
        break;
    case '11':
        echo date("d")." de "."Noviembre"." de ".date("Y");
        break;
    case '12':
        echo date("d")." de "."Diciembre"." de ".date("Y");
        break;
}

echo "<br>".date("d/m/Y");


?>