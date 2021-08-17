<?php
$fruits = [
    'apple' => '사과',
    'banana' => '바나나',
    'strawberry' => '딸기',
    'grape' => '포도',
    'watermelon' => '수박',
];

$fruits2 = $fruits;
$fruits3 = $fruits;

sort(array: $fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

rsort(array: $fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

ksort(array: $fruits2);
echo "<pre>";
print_r($fruits2);
echo "</pre>";

krsort(array: $fruits2);
echo "<pre>";
print_r($fruits2);
echo "</pre>";

asort(array: $fruits3);
echo "<pre>";
print_r($fruits3);
echo "</pre>";

arsort(array: $fruits3);
echo "<pre>";
print_r($fruits3);
echo "</pre>";