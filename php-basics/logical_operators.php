<?php

    $child = false;
    $senior = True;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";

    // && = and (if both conditions are true)
    // || = or
    // ! = not

?>