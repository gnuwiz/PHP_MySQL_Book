<?php
const CONSTANT = '안녕하세요.';

function myFunc()
{
    // const MESSAGE = '저는 PHP를 공부합니다.'; // 주석을 풀면 에러가 발생합니다.
}

// myFunc();

class MyClass
{
    public const MESSAGE = '저는 PHP를 공부합니다.';

    public static function foo()
    {
        // const BYE = '안녕히가세요.'; // 주석을 풀면 에러가 발생합니다.
    }
}

echo CONSTANT;
echo MyClass::MESSAGE;