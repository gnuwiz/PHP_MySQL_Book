<?php
declare(strict_types=1); # strict 모드 지정

class Parents
{
    public string $txt = "부모클래스의 프로퍼티입니다.<br/>";

    public function name(): string
    {
        return "{$this->txt} 부모 메서드입니다.<br/>";
    }
}

class Child extends Parents
{
    public string $txt = "자식클래스의 프로퍼티입니다.<br/>";

    public function name(): string
    {
        return "{$this->txt} 자식 메서드입니다.<br/>";
    }
}

$parents = new Parents; # 클래스 Parents 인스턴스 생성
$child = new Child; # 자식 클래스 Child 인스턴스 생성

echo $parents->name();
echo $child->name();