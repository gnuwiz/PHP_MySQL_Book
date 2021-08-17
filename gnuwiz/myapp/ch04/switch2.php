<?php
$input = true;

switch ($input) {
    case "true":
        $result = "1번째 결과";
        break;
    case "false":
        $result = "2번째 결과";
        break;
    case "null":
        $result = "3번째 결과";
        break;
    case true:
        $result = "4번째 결과";
        break;
    case false:
        $result = "5번째 결과";
        break;
    case null:
        $result = "6번째 결과";
        break;
}

echo $result;