<?php
    $name = "Bro Code";
    $food = "Pizza";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "You have orderd {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "The price is {$total}";
?>