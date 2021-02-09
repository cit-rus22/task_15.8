<?php

$a = readline('Введите первое число: ');
$b = readline('Введите второе число: ');
$c = readline('Введите третье число: ');

if(  $a > $b  )
{
    $max = $a > $c? $a: $c;
}
else
{
    $max = $b > $c? $b: $c;
}

echo $max;

?>