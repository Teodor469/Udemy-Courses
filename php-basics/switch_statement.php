<?php

    $date = date("l");
    
    switch($date){
        case "Monday":
            echo"I hate mondays";
            break;
        case "Tuesday":
            echo"It is taco Tuesday";
            break;
        case "Wednesday":
            echo"The work week is half over";
            break;
        case "Thursday":
            echo"It's almost the weekend";
            break;
        case "Friday":
            echo"The weekend is here";
            break;
        case "Saturday":
            echo"Time to party";
            break;
        case "Sunday":
            echo"Time to relax";
            break;
        default:
            echo"{$date} is not a date";
    }

    

?>