<?php

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo "The square of 5 is $result" . '<br>';

// Closures

function create_counter() {
    $count = 0;

    $counter = function() use($count) {
        return ++$count;
    };

    return $counter;
}

$counter = create_counter();
echo $counter() . '<br>';

?>