<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php

    // Basically a dictionary
    // Key value pairs
    $capitals = array("USA"=>"Washington D.C.", 
                        "Japan"=>"Tokyo", 
                        "South Korea"=>"Seoul", 
                        "India"=>"New Delhi");


    $capital = $capitals[$_POST["country"]];

    echo $capital;

    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $reversed_array = array_reverse($capitals);
    // echo count($capitals);

    // foreach($capitals as $key => $value){
    //     echo"{$key} - {$value} <br>";
    // }


?>