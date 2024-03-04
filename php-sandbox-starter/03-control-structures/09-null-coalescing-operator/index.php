<?php
// $favourite_color = 'red';
$second_favourite_color = 'green';

// $color = isset($favourite_color) ? $favourite_color : 'blue';


// $color = $favourite_color ?? 'blue';


$color = isset($favourite_color) ? $favourite_color : (isset($second_favourite_color) ? $second_favourite_color : 'blue');

$color = $favourite_color ?? $second_favourite_color ?? 'blue';

echo $color;
?>