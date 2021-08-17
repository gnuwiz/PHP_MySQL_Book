<?php
$arr1 = array("1" => "키위", "2" => "멜론");
$arr2 = array("1" => "딸기", "2" => "오렌지", "3" => "수박");

$result1 = $arr1 + $arr2; // [키위, 멜론, 수박]
print_r($result1);

echo "<br/>";

$result2 = $arr2 + $arr1; // [딸기, 오렌지, 수박]
print_r($result2);