<?php
class A {
    public function __construct()
    {
        echo __CLASS__; // 해당 클래스명 A가 출력됩니다.
    }

    public function sayHello()
    {
        return __METHOD__; // 해당 '클래스명::함수명' 의 형태로 출력됩니다.
    }
}

$say = new A();
echo $say->sayHello();