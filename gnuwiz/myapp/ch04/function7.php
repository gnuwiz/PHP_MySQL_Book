<?php
function profile($name, $age)
{
    $my_profile = array($name, $age);

    return $my_profile;
}

$result = profile("홍길동", "20");
print_r($result);