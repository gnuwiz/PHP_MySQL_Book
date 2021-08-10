<?php
class Example {
    private $property = 'property'; // 비공개 프로퍼티

    private function myFunc() // 비공개 메서드
    {
        return 'Hello World';
    }
}

$example = new Example();

echo $example->property;
echo "<br/>";
echo $example->myFunc();