<?php

/* math operations
$output = null;

$num1 = 20;
$num2 = 10;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;


// Built-in PHP functions
$output = rand();

$output = round(4.4);

$output = ceil(4.2);

$output = floor(4.9);

$output = sqrt(64);

$output = pi();

$output = abs(4.7);

$output = number_format(1235235.312987, 2, '.', ',')
*/

// string functions
// $output = null;
// $string = 'Hello world!';

// //strlen()
// $output = strlen($string);

// // str_word_count
// $output = str_word_count($string);

// // strpos()
// $output = strpos($string, 'world');

// // Get specific character by index
// $output = $string[4];

// //substr
// $output = substr($string, 6, 6);

// // str_replace()
// $output = str_replace('world', 'universe', $string);

// // strlower()
// $output =strtolower($string);

// // strtoupper()
// $output = strtoupper($string);

// // ucwords
// $output = ucwords($string);

// // trim
// $output = trim(    'Hello'     );

$output = null;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-xl">
                <?= $output ?>
            </p>
        </div>
    </div>
</body>

</html>