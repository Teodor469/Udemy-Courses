<?php

$name = 'Alice';

function sayHello(){
    global $name;

    $name = 'Bob';
    echo 'Hello ' . $name;
}

function sayGoodbye() {
    $names = ['Jack', 'Joe'];
    echo 'Goodbye ' . $names[0];
}

sayGoodbye();
?>