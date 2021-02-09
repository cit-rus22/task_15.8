<?php

$n1 = readline('Введите первое число: ');
$n2 = readline('Введите второе число: ');

if ($n1 > $n2) {
  $max = $n1;
} else {
  $max = $n2;
}

echo $max;

?>