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