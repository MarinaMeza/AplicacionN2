<!--Escribir un programa que use la variable $operador que pueda almacenar los símbolos matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el resultado por pantalla.-->

<?php
$operador='/';
$op1=rand(1,15);
$op2=rand(1,15);

switch ($operador)
{
    case '+':
        echo $op1+$op2;
        break;
    case '-':
        echo $op1-$op2;
        break;
    case '*':
        echo $op1*$op2;
        break;
    case '/':
        echo $op1/$op2;
        break;
}
?>