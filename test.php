<!-- <?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = "apple";
$bool1 = true;
$bool2 = false;
$null = null;

$result = $number1 + $number3;
$result = $number3 . $number2;
$result = $fruit . $number2;
$result = $number1 + $bool1;
$result = $number1 + $null;
$result = (string) $number1; 

var_dump($result)

?> -->



<?php
$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

inspect($names);
inspect($numbers);


function maps($x)
{
  $doubled_numbers = [];
  foreach ($x as $value) {
    $value *= 2;
    $doubled_numbers[] = $value;
  }
  return $doubled_numbers;
}
?>