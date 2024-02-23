<?php


    setcookie("fav_food", "pizza", time() - 0, "/");


    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I do not know your fav food";
    }
?>