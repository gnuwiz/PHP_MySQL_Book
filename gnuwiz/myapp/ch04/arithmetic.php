<?php
$a = 5;
$b = 3;

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;
$c6 = 0;
$c7 = 0;

$c1 = $a + $b;
$c2 = $a - $b;
$c3 = -$a;
$c4 = $a * $b;
$c5 = $a ** $b;
$c6 = $a / $b;
$c7 = $a % $b;

echo "산술연산자 <br/>";
echo "a + b는 {$c1} 입니다.<br/>";
echo "a - b는 {$c2} 입니다.<br/>";
echo "-a는 {$c3} 입니다.<br/>";
echo "a * b는 {$c4} 입니다.<br/>";
echo "a ** b는 {$c5} 입니다.<br/>";
echo "a / b는 {$c6} 입니다.<br/>";
echo "a % b는 {$c7} 입니다.<br/>";