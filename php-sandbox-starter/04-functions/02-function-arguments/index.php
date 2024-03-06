<?php

function add($a, $b){
    return $a + $b;
}

echo add(1, 2);


function add_all(...$numbers){
    $total = 0;

    foreach($numbers as $number){
        $total += $number;
    }
    return $total;
}

echo '<br>';
echo add_all(1, 2, 3, 4, 5, 6);

?>
