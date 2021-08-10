<?php
define('CONSTANT', '안녕하세요.');

function myFunc() {
    define('MESSAGE', '저는 PHP를 공부합니다.');
}

myFunc();

echo CONSTANT;
echo MESSAGE;