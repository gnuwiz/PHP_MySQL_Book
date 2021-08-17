<?php
function myFunc() {
    $str = "PHP"; // 지역 범위
    echo "<p>변수 str의 값은 : {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$str}</p>"; // 함수 외부에서 변수 $str을 사용하면 오류가 발생합니다.