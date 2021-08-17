<?php
$str1 = "Hello World";
$str2 = "PHP";
$result1 = $str1 ?? $str2;
echo $result1;
echo "<br/>";


$str1 = "Hello World";
$str2 = null;
$result2 = $str1 ?? $str2;
echo $result2;
echo "<br/>";


$str1 = null;
$str2 = "PHP";
$result3 = $str1 ?? $str2;
echo $result3;
echo "<br/>";