<?php
$str = "hello gnuwiz.com";
// 문자열 검색 함수
$result = str_contains(haystack: $str, needle: "gnuwiz");
echo $result."<br/>";
// 문자열의 처음 시작이 해당 문자열인지 검색
$result2 = str_starts_with(haystack: $str, needle: "hello");
echo $result2."<br/>";
// 문자열의 마지막이 해당 문자열인지 검색
$result3 = str_ends_with(haystack: $str, needle: "com");
echo $result3."<br/>";