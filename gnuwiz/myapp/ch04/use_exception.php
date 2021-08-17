<?php
class MyException extends Exception # 사용자 지정 MyException 예외처리 클래스 생성
{
    public function myMessage($my_msg) # 사용자 지정 메서드 생성
    {
        return $my_msg;
    }
}

$msg = "예외 클래스 오류 발생"; # 예외 발생 시 출력 메시지 설정
$code = 123; # 예외 발생 시 출력 코드 설정
$e = new MyException($msg, $code); # 사용자 지정 예외 처리 클래스의 인스턴스 생성

echo $e->myMessage("Exception 클래스를 상속받았습니다."); # 사용자 지정 예외 처리 메서드에 문자열 전달 및 호출
echo "<br/>";
echo "예외 메시지 : ".$e->getMessage();
echo "<br/>";
echo "예외 코드 : ".$e->getCode();