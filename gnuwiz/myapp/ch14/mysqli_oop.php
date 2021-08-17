<?php
$mysql_host = "localhost"; // 데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root"; // 데이터베이스 사용자 계정
$mysql_password = "1234"; // 데이터베이스 사용자 패스워스
$mysql_db = "mydb"; // 연결할 데이터베이스 명
// MySQL 데이터베이스 연결
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
// 연결 오류 발생 시 스크립트 종료
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}
echo "연결 성공";