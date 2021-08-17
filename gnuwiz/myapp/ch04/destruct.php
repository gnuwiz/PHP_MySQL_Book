<?php
class Example
{
    function __construct()
    {
        echo "Example 클래스 초기화<br/>";
    }

    public function show()
    {
        echo "Hello World <br/>";
    }

    function __destruct()
    {
        echo "Example 클래스 소멸<br/>";
    }
}

$example = new Example(); // 인스턴스 생성
$example->show();