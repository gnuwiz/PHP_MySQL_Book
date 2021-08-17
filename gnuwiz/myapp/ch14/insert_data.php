<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "mydb";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}
// 데이터 레코드 추가 SQL 문
$sql = " INSERT INTO movie_director (id, name, birthday) VALUES (9, '제임스 카메론', '1954-08-16'); ";

if (mysqli_query($conn, $sql)) {
    echo "새 레코드가 성공적으로 생성되었습니다.";
} else {
    echo "생성 실패: " . mysqli_error($conn);
}

mysqli_close($conn);