<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "mydb";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}
// 데이터 레코드 업데이트 SQL 문
$sql = " UPDATE movie_director SET name='홍길동' WHERE id=9 ";

if (mysqli_query($conn, $sql)) {
    echo "레코드가 성공적으로 업데이트되었습니다.";
} else {
    echo "업데이트 실패: " . mysqli_error($conn);
}

mysqli_close($conn);