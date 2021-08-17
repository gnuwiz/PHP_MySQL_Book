<?php
session_start(); // 세션 시작
session_unset(); // 모든 세션변수를 언레지스터 시켜줌
session_destroy(); // 세션 해제

if(!isset($_SESSION['ss_mb_id'])) { // 세션이 삭제되었다면 로그인 페이지로 이동
    echo "<script>alert('로그아웃 되었습니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
    exit;
}