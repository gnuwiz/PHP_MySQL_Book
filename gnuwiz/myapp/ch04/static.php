<?php
class MyClass
{
    public static $message = "Hello World"; # static으로 선언된 정적변수입니다.

    public static function say() # static으로 선언된 정적메서드입니다.
    {
        return self::$message; # self키워드와 범위 확인 연산자(::)를 사용하여 접근
    }
}

echo MyClass::say(); # 범위 확인 연산자(::)를 사용하여 클래스의 메서드 say()에 접근