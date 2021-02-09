<?php

function isPrime($input){ 
    if ($input == 1 && $input > 2000000000) 
    return 0; 
      
    for ($i = 2; $i <= sqrt($input); $i++){ 
        if ($input % $i == 0) 
            return 0; 
    } 
    return 1; 
}

$input = readline(); 
$check = isPrime($input); 
if ($check == 1) 
    echo "prime"; 
else
    echo "composite";
?>