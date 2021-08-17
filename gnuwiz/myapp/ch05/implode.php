<?php
$str = [ // 배열선언
    'www',
    'gnuwiz',
    'com',
];
// implode() 함수 사용
echo implode(array: $str)."<br/>"; // 명명된 매개변수 사용불가
echo implode(separator: '.', array: $str)."<br/>";
echo "<br/>";
// join() 함수 사용
echo join(array: $str)."<br/>"; // 명명된 매개변수 사용불가
echo join(separator: '.', array: $str)."<br/>";
echo "<br/>";