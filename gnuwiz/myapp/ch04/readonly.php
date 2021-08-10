<?php
class Example
{
    public readonly string $str;

    public function say(string $str) {
        $this->say = $str;
    }
}

$str = "Hello World";
$example = new Example();
$example->say(str: "Hello World"); // 정상 실행
$example->say(str: "PHP"); // 오류 발생