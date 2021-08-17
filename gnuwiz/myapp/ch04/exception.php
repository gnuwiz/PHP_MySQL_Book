<?php
$msg = "예외 클래스 오류 발생"; # 예외 발생 시 출력 메시지 설정
$code = 123; # 예외 발생 시 출력 코드 설정
$e = new Exception($msg, $code); # 예외 처리 클래스의 인스턴스 생성

echo "예외 메시지 : ".$e->getMessage();
echo "<br/>";
echo "예외 코드 : ".$e->getCode();