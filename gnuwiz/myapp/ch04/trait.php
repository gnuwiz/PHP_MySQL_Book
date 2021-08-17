<?php
trait Dog # 트레이트 Dog 생성
{
    public string $type; # 프로퍼티
    public string $name;
    public int $age;

    public function describe()
    {
        echo "{$this->type}의 이름은 {$this->name}입니다. {$this->age}살 입니다. <br/>";
    }
}

trait Say # 트레이트 Say 생성
{
    abstract public function greet(); # 추상 메서드 정의
}

class Animal # 클래스 Animal 생성
{
    use Dog, Say; # 트레이트 Dog, Say를 삽입

    public function greet() # 추상 메서드의 몸체를 구현
    {
        echo "멍멍~ 안녕하세요. <br/>";
    }
}

$animal = new Animal();
$animal->type = "강아지"; # 트레이트의 속성 값을 인스턴스를 통하여 전달
$animal->name = "담이";
$animal->age = 6;

$animal->describe();
$animal->greet();