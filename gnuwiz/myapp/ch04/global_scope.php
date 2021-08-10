<?php
$str = "PHP"; // 전역 범위

function myFunc() {
    echo "<p>변수 str의 값은 : {$str}</p>"; // 이 함수 내에서 변수 $str을 사용하면 오류가 발생합니다.
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>";