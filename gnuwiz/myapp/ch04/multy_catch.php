<?php
class MyException1 extends Exception {} # 사용자 정의 MyException1 예외처리 클래스 생성
class MyException2 extends Exception {} # 사용자 정의 MyException2 예외처리 클래스 생성
class MyException3 extends Exception {} # 사용자 정의 MyException3 예외처리 클래스 생성

$num = 2;

try {
    if ($num == 1) { throw new MyException1('숫자는 1 입니다.'); }
    if ($num == 2) { throw new MyException2('숫자는 2 입니다.'); }
    if ($num == 3) { throw new MyException3('숫자는 3 입니다.'); }
} catch (MyException1 $e) {
    echo "예외 메시지 : ".$e->getMessage();
} catch (MyException2 $e) {
    echo "예외 메시지 : ".$e->getMessage();
} catch (MyException3 $e) {
    echo "예외 메시지 : ".$e->getMessage();
}