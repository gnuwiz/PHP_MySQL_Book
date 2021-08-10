<?php
interface WebApp # 인터페이스 WebApp
{
    public function register($id, $password, $name); # 메서드를 정의
    public function login($id, $password);
    public function logout($id);
}

interface CMS # 인터페이스 CMS
{
    public function post($subject); # 메서드를 정의
}

class WebSite implements WebApp, CMS  # 한 개의 클래스에서 두 개의 인터페이스를 상속받아 메서드를 구현
{
    public function register($id, $password, $name)
    {
        echo "사용자 등록 : 아이디={$id}, 이름={$name} <br/>";
    }

    public function login($id, $password)
    {
        echo "로그인 : {$id} <br/>";
    }

    public function logout($id)
    {
        echo "로그아웃 : {$id} <br/>";
    }

    public function post($subject)
    {
        echo "게시물 등록 : {$subject} <br/>";
    }
}

$website = new WebSite; # 클래스 WebSite의 인스턴스 생성

$id = 'hong';
$password = 1234;
$name = '홍길동';
$subject = '게시물 제목 입니다.';

$website->register(id: $id, password: $password, name: $name); # 메서드 호출
$website->login(id: $id, password: $password);
$website->post(subject: $subject);
$website->logout(id: $id);