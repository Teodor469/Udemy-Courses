<?php

    $username = "Teodor K. Todorov";
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $username = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $username = strcmp($username, "Bro code");
    // $username = strpos($username, " ");
    // $username = substr($username, 0, 6);
    $fullname = explode(" ", $username);
    $blah = implode(" ", $fullname);

    foreach($fullname as $name){
        echo $name . "<br>";
    }

    echo $fullname;
    echo $blah;
?>