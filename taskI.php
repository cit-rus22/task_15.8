<?php

$a = readline();
$stepen = readline();
$n = (int)$stepen;

function power($a, $n) {
    if ($n == 0) {
      return 1;
    }
    return $a * power($a, $n-1);
  }

echo power($a, $n);

?>