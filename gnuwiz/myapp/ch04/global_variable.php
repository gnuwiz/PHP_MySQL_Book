<?php
$str = "PHP"; // 전역 범위

function myFunc() {
    global $str; // global 키워드를 사용하여 변수 $str을 전역 변수로 선언
    echo "<p>변수 str의 값은 : {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>";