<?php
$mysql_host = "localhost"; // 데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root"; // 데이터베이스 사용자 계정
$mysql_password = "1234"; // 데이터베이스 사용자 패스워스
$mysql_db = "mydb"; // 연결할 데이터베이스 명
// MySQL 데이터베이스 연결
try {
    $conn = new PDO("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "연결 성공";
} catch(PDOException $e) {
    echo "연결 실패: " . $e->getMessage();
}