<?php
$str = "PHP"; // 전역 범위

function myFunc() {
    echo "<p>변수 str의 값은 : {$GLOBALS['str']}</p>";
}

myFunc();
echo "<p>변수 str의 값은 : {$GLOBALS['str']}</p>";