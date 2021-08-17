<?php
$fruits = [
    'apple' => '사과',
    'banana' => '바나나',
    'strawberry' => '딸기',
    'grape' => '포도',
    'watermelon' => '수박',
    'kiwi' => '키위',
    'mango' => '망고',
    'cherry' => '앵두',
    'peach' => '복숭아'
];

$vegetables = [
    'celery' => '샐러리',
    'cucumber' => '오이',
    'carrot' => '당근',
    'pepper' => '후추',
    'garlic' => '마늘',
    'ginger' => '생강',
    'watermelon' => '수박',
    'tomato' => '토마토',
    'strawberry' => '딸기',
];

$merge = array_merge($fruits, $vegetables); // 명명된 매개변수 사용불가
echo "<pre>";
print_r($merge);
echo "</pre>";

$intersec = array_intersect($fruits, $vegetables); // 명명된 매개변수 사용불가
echo "<pre>";
print_r($intersec);
echo "</pre>";