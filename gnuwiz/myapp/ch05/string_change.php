<?php
$str = "hello gnuWiz.com";

echo strtoupper(string: $str)."<br/>";
echo strtolower(string: $str)."<br/>";
echo ucfirst(string: $str)."<br/>";
echo ucwords(string: $str)."<br/>";
echo lcfirst(string: $str)."<br/>";

$str2 = strtr(string: $str, from: "hello", to: "Welcome");
echo $str2."<br/>";

$replace_pairs = [
    'hello'=>'Welcome',
    'gnuWiz'=>'php',
    'com'=>'co.kr'
];

$str3 = strtr($str, $replace_pairs); // 명명된 매개변수 사용불가
echo $str3."<br/>";