<?php
include("../dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.

$title    = trim($_POST['title']);
$datetime = date('Y-m-d H:i:s', time());

if (empty($title)) {
    echo "<script>alert('추가실패 : 내용을 입력하세요.');</script>";
    echo "<script>location.replace('../index.php');</script>";
    exit;
} else {
    $sql = " INSERT INTO todo SET title = '$title', datetime = '$datetime' ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn); // 데이터베이스 접속 종료
    header("Location: ../index.php");
}