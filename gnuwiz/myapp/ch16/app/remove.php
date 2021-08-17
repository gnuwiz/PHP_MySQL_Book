<?php
include("../dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.

$id = $_GET['id'];

if (empty($id)) {
    echo "<script>alert('삭제실패 : 고유 ID가 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('../index.php');</script>";
    exit;
} else {
    $sql = " DELETE FROM todo WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn); // 데이터베이스 접속 종료
    header("Location: ../index.php");
}