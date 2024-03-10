<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/
function farenheit_to_celsius($tempreture) {
  $celsius = ($tempreture - 32) * 5/9;
  return $celsius;
}

echo farenheit_to_celsius(76);

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

function print_names_to_uppercase(...$names) {
  $uppercased_names = [];
  foreach($names as $name) {
    $uppercased_names[] = strtoupper($name);
  }
  return $uppercased_names;
}

print_r(print_names_to_uppercase('John', 'Ana', 'Mike', 'Charlie'));

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function find_longest_word($sentence) {
  $words = explode(" ", $sentence);

  $longest_word = "";
  $max_legth = 0;

  foreach ($words as $word) {
    $cleaned_word = preg_replace("/[^a-zA-Z0-9]/", "", $word);

    if(strlen($cleaned_word) > $max_legth) {
      $longest_word = $cleaned_word;
      $max_legth = strlen($cleaned_word);
    }
  }
  return $longest_word;
}

$sentence = "The quick brown fox jumped over the lazy dog";
$result = find_longest_word($sentence);
echo "The longest word is: $result";