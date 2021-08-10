<?php
class Example {
    public $property = 'property'; // 전체 공개 프로퍼티

    public function myFunc() // 전체 공개 메서드
    {
        return 'Hello World';
    }
}

$example = new Example();

echo $example->property;
echo "<br/>";
echo $example->myFunc();