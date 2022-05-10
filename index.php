<?php

$sorted = array();
$j = 0;

for ($i=0; $i <= 20; $i++) { 
    $number = rand(1, 10);
    $sorted[$j] = $number;
    $j++;
}

$printed = implode(', ', $sorted);

echo "Array: [" . $printed . "]";

echo ("<br>");

$arr = array_count_values($sorted);

$none = array();
$x = 0;

foreach($arr as $key => $value){
    if($value > 1){
        // Não faz nada
    } else {
        $none[$x] = $key;
        $x++;
    }
}

$str = implode(",", $none);

echo "Os números que não se repetem são: " . $str;

?>