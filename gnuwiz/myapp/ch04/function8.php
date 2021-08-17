<?php
function myFunc($name, $num)
{
    echo "저의 이름은 {$name}입니다. 나이는 {$num}살 입니다.<br>";
}
myFunc("홍길동", 20);


function myFunc2($name, $num)
{
    echo "저의 이름은 {$name}입니다. 나이는 {$num}살 입니다.<br>";
}

myFunc2(name: "홍길동", num: 20);
myFunc2(num: 20, name: "홍길동");