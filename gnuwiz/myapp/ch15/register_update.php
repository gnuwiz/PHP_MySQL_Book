<?php
include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.

$mode = $_POST['mode'];
// 아무런 모드가 없다면 중단
switch ($mode) {
    case 'insert' :
        $mb_id = trim($_POST['mb_id']);
        $title = "회원가입";
        break;
    case 'modify' :
        $mb_id = trim($_SESSION['ss_mb_id']);
        $title = "회원수정";
        break;
    default:
        echo "<script>alert('mode 값이 제대로 넘어오지 않았습니다.');</script>";
        echo "<script>location.replace('./register.php');</script>";
        break;
}

if (!$_POST['mb_id']) {
    echo "<script>alert('아이디가 넘어오지 않았습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_password']) {
    echo "<script>alert('비밀번호가 넘어오지 않았습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if ($_POST['mb_password'] != $_POST['mb_password_re']) {
    echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_name']) {
    echo "<script>alert('이름이 넘어오지 않았습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_email']) {
    echo "<script>alert('이메일이 넘어오지 않았습니다.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}
// POST로 넘어온 데이터를 가공
$mb_password	= trim($_POST['mb_password']); // 첫번째 입력 패스워드
$mb_password_re	= trim($_POST['mb_password_re']); // 두번째 입력 패스워드
$mb_name		= trim($_POST['mb_name']); // 이름
$mb_email		= trim($_POST['mb_email']); // 이메일
$mb_job			= $_POST['mb_job'] ?? ""; // 직업
$mb_gender		= $_POST['mb_gender'] ?? ""; // 성별
$mb_language	= isset($_POST['mb_language']) ? implode(",", $_POST['mb_language']) : ""; // 관심언어 (,) 구분으로 저장
$mb_datetime	= date('Y-m-d H:i:s', time()); // 가입일
// 입력한 비밀번호를 MySQL password() 함수를 사용해 암호화해서 가져옴
$sql = " SELECT PASSWORD('$mb_password') AS pass ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['pass'];

if($mode == "insert") { // 신규 등록 모드
    // 회원가입을 시도하는 아이디가 사용중인 아이디인지 확인하는 SQL 문
    $sql = " SELECT * FROM member WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
    // 만약 사용중인 아이디라면 알림창을 띄우고 회원가입 페이지로 이동
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('이미 사용중인 회원아이디 입니다.');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    $sql = " INSERT INTO member
				SET mb_id = '$mb_id',
					mb_password = '$mb_password',
					mb_name = '$mb_name',
					mb_email = '$mb_email',
					mb_job = '$mb_job',
					mb_gender = '$mb_gender',
					mb_language = '$mb_language',
					mb_datetime = '$mb_datetime' ";
    $result = mysqli_query($conn, $sql);

} else if ($mode == "modify") { // 회원 수정 모드

    $sql = " UPDATE member
				SET mb_password = '$mb_password',
					mb_email = '$mb_email',
					mb_job = '$mb_job',
					mb_gender = '$mb_gender',
					mb_language = '$mb_language'
			 WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
}

if ($result) { // 회원가입 또는 회원수정 SQL 문이 정상 실행되었다면.
    echo "<script>alert('".$title."이 완료 되었습니다.');</script>";
    echo "<script>location.replace('./member_list.php');</script>";
    exit;
} else {
    echo "생성 실패: " . mysqli_error($conn);
    mysqli_close($conn); // 데이터베이스 접속 종료
}