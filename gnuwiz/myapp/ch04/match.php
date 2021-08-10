<?php
$input = true;

$result = match ($input) {
    "true" => "1번째 결과",
    "false" => "2번째 결과",
    "null" => "3번째 결과",
    true => "4번째 결과",
    false => "5번째 결과",
    null => "6번째 결과",
};

echo $result;