<?php
class MyClass
{
    function say(string|int $string, $number) : mixed
    {
        $array = array($string, $number);

        return $array;
    }
}

$my_class = new MyClass();
$result = $my_class->say(string: 'Hello World', number: 1);
print_r($result);