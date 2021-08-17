<?php
$sep = ', ';

function myFunc()
{
    global $sep;
    $wor = 'world';

    return function ($hel) use ($sep, $wor) {
        $exc = '!';
        return $hel . $sep . $wor . $exc;
    };
}

$hello = myFunc();
echo $hello('Hello');