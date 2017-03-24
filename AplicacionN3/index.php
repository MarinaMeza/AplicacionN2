<?php
$a=rand(1,15);
$b=rand(1,15);
$c=rand(1,15);

if(($a<$b && $a>$c) || ($a>$b && $a<$c))
{
    echo $a;
}
elseif (($b<$c && $b>$a) || ($b>$c && $b<$a))
{
    echo $b;
}
elseif (($c<$a && $c>$b) || ($c>$a && $c<$b))
{
    echo $c;
}
elseif ($a==$b || $b==$c || $a==$c)
{
    echo "No hay valor del medio";
}

?>