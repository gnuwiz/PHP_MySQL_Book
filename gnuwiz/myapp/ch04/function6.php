<?php
function profile($name, $age)
{
    $my_profile = "저의 이름은 {$name}입니다. 나이는 {$age}살 입니다.";

    return $my_profile;
}

echo profile("홍길동", "20");