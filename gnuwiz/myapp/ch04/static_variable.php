<?php
function myFunc() {
    static $x = 0;
    echo "<p>변수 x의 값은 : {$x}</p>";
    $x++;
}

myFunc();
myFunc();
myFunc();