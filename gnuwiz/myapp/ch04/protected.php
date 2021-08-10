<?php
class Example {
    protected $property = 'property'; // 보호된 프로퍼티

    protected function myFunc() // 보호된 메서드
    {
        return 'Hello World';
    }
}

$example = new Example();

echo $example->property;
echo "<br/>";
echo $example->myFunc();