<?php
$input = "";

$result = match ($input) {
    "true", true => "1번째 결과",
    "false", false => "2번째 결과",
    "null", null => "3번째 결과",
    default => "결과 없음",
};

echo $result;