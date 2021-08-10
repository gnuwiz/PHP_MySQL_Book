<?php
class Fruit {
    public $name; // 속성
    public $color;

    function set_fruit(string $name, string $color) // 메서드에 매개변수로 문자유형의 값만 받음
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_fruit() : string  // 메서드의 반환 유형으로 문자유형을 지정
    {
        $string = "이 과일은 {$this->name} 입니다. 색깔은 {$this->color} 입니다."; // 변수 $string에 문자열을 넣습니다.

        return $string; // 변수 $string을 return 합니다.
    }
}

$apple = new Fruit(); // 인스턴스 $apple 생성
$apple->set_fruit(name: '사과', color: '빨강'); // 메서드 set_name()에 문자유형 '사과', '빨강'을 속성 값으로 전달

echo $apple->get_fruit(); // 인스턴스 $apple의 메서드 get_fruit()을 출력