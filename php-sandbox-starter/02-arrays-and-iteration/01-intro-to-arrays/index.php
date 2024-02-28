<?php
$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// inspect($names);


// print_r($names);

// Add element to array
$numbers[0] = 100;
inspect($numbers);
?>