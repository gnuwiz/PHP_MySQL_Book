<?php
include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.

$mb_id			= trim($_POST['mb_id']);
$mb_password	= trim($_POST['mb_password']);

if (!$mb_id || !$mb_password) {
    echo "<script>alert('회원아이디나 비밀번호가 공백이면 안됩니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
    exit;
}
// 회원 테이블에서 해당 아이디가 존재하는지 체크
$sql = " SELECT * FROM member WHERE mb_id = '$mb_id' ";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);
// 입력한 비밀번호를 MySQL password() 함수를 이용해 암호화해서 가져옴
$sql = " SELECT PASSWORD('$mb_password') AS pass ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['pass'];
// 존재하는 아이디인지, 입력한 패스워드가 회원 테이블에 저장된 패스워드와 동일한지 체크
if (!$mb['mb_id'] || !($password === $mb['mb_password'])) {
    echo "<script>alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
    exit;
}

$_SESSION['ss_mb_id'] = $mb_id; // 아이디, 비밀번호 확인 후 세션 생성

mysqli_close($conn); // 데이터베이스 접속 종료
// 세션이 있다면 회원목록 페이지로 이동
if(isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('로그인 되었습니다.');</script>";
    echo "<script>location.replace('./member_list.php');</script>";
}