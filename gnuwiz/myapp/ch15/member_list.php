<?php
include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.
// member 테이블에 등록되어있는 회원의 수를 구함
$sql = " SELECT COUNT(*) AS `cnt` FROM member ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_count = $row['cnt'];
// 회원 목록을 조회
$sql = " SELECT * FROM member ORDER BY mb_datetime desc ";
$result = mysqli_query($conn, $sql);

if (!$_SESSION['ss_mb_id']) {
    echo "<script>alert('로그인 후 사용가능합니다.');</script>";
    echo "<script>location.replace('./index.php');</script>";
}
?>
<html>
<head>
    <title>Member List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text-center">회원목록</h4>
    <div class="box">
        <table class="table table-striped">
            <caption>Total <?php echo number_format($total_count) ?>명</caption>
            <thead>
            <tr>
                <th>번호</th>
                <th>아이디</th>
                <th>이름</th>
                <th>이메일</th>
                <th>직업</th>
                <th>성별</th>
                <th>관심언어</th>
                <th>가입일</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $row=mysqli_fetch_assoc($result); $i++): ?>
                <tr>
                    <td><?php echo $i+1 ?></td>
                    <td><?php echo $row['mb_id'] ?></td>
                    <td><?php echo $row['mb_name'] ?></td>
                    <td><?php echo $row['mb_email'] ?></td>
                    <td><?php echo $row['mb_job'] ?></td>
                    <td><?php echo $row['mb_gender'] ?></td>
                    <td><?php echo $row['mb_language'] ?></td>
                    <td><?php echo $row['mb_datetime'] ?></td>
                </tr>
            <?php endfor; ?>
            <?php
            if ($total_count == 0) { // 가입된 회원이 없다면
                echo '<tr><td colspan="8">등록된 회원이 없습니다.</td></tr>';
            }
            ?>
            </tbody>
        </table>

        <a href="./register.php" class="btn btn-primary">회원정보수정</a>
        <a href="./logout.php" class="btn btn-danger">로그아웃</a>
    </div>
</div>
<?php
mysqli_close($conn); // 데이터베이스 접속 종료
?>
</body>
</html>