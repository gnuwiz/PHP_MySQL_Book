<?php
class A
{
    public static function myFunc() # 정적 메서드
    {
        static::say();
    }

    public static function say() # 정적 메서드
    {
        echo "부모 클래스 호출 <br/>";
    }
}

class B extends A # 클래스 A를 상속 받은 클래스 B (자식 클래스)
{
    public static function test() # 자식 클래스 B의 정적 메서드
    {
        A::myFunc(); # 클래스 A의 메서드 myFunc() 호출
        parent::myFunc(); # 클래스 B의 메서드 myFunc() 호출
        self::myFunc(); # 클래스 B의 메서드 myFunc() 호출
    }

    public static function say() # 자식 클래스 B의 정적 메서드
    {
        echo "자식 클래스 호출 <br/>";
    }
}

b::test(); # 클래스 B의 메서드 호출
