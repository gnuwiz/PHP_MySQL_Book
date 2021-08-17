<?php
$i = 123;
$j = 221;
$k = 1231;
$l = 22;

$numbers = [$i, $j, $k, $l];

echo min($i, $j, $k, $l)."<br/>"; // 명명된 매개변수 사용불가
echo min(value: $numbers)."<br/>";
echo "<br/>";

echo max($i, $j, $k, $l)."<br/>"; // 명명된 매개변수 사용불가
echo max(value: $numbers)."<br/>";
echo "<br/>";

echo abs(num: -10)."<br/>";
echo abs(num: 10)."<br/>";
echo "<br/>";