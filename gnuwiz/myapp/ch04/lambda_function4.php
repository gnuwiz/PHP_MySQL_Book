<?php
$sep = ', ';

function myFunc()
{
    global $sep;
    $wor = 'world';

    return fn ($hel) => $hel . $sep . $wor . '!';
}

$hello = myFunc();
echo $hello('Hello');