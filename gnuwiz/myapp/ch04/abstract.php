<?php
abstract class Animal # 추상 클래스 Animal
{
    public string $type; # 프로퍼티
    public string $name;
    public int $age;

    public function describe() # 비 추상 메서드 정의
    {
        echo "{$this->type}의 이름은 {$this->name}입니다. {$this->age}살 입니다. <br/>";
    }

    abstract public function greet(); # 추상 메서드 정의
}

class Dog extends Animal
{
    public function greet() # 추상 메서드의 몸체를 구현
    {
        echo "멍멍~ 안녕하세요. <br/>";
    }
}

$animal = new Dog();
$animal->type = "강아지";
$animal->name = "담이";
$animal->age = 6;

$animal->describe();
$animal->greet();