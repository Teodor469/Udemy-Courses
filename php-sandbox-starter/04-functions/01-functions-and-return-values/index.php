<?php

function say_hello() {
    echo 'Hello';
}


function say_goodbye(){
    return 'Goodbye';
}

say_hello();
$goodbye = say_goodbye();
echo $goodbye . '<br>'

?>