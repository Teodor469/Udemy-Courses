<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($number){
    return $number * $number; 
};

$squared_numbers = array_map($square, $numbers);


// print_r($squared_numbers);

function apply_callback($callback, $value) {
    return $callback($value);
}

$double = function($number) {
    return $number * 2;
};

$result = apply_callback($double, 5);

echo $result;
?>