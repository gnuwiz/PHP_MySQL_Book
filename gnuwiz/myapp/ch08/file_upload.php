<?php
$uploads_dir = './uploads'; // 파일 업로드 디렉터리 설정
$allowed_ext = array('jpg','jpeg','png','gif'); // 파일 확장자 지정
// uploads 디렉터리가 없다면 생성
if(!is_dir($uploads_dir))
{
    if(!mkdir($uploads_dir, 0777))
    {
        die("업로드 디렉터리 생성에 실패 했습니다.");
    }
}

if(!isset($_FILES['myfile']))
{
    die("업로드된 파일이 없습니다.");
}

$error = $_FILES['myfile']['error']; // 오류 코드 반환
$name = $_FILES['myfile']['name']; // 파일 이름
// 오류 확인 (match 표현식)
$result = match ($error) {
    UPLOAD_ERR_OK => "업로드 정상 완료 ($error)",
    UPLOAD_ERR_INI_SIZE => "php.ini에 설정된 최대 파일크기 초과 ($error)",
    UPLOAD_ERR_FORM_SIZE => "HTML 폼에 설정된 최대 파일크기 초과 ($error)",
    UPLOAD_ERR_PARTIAL => "파일의 일부만 업로드됨 ($error)",
    UPLOAD_ERR_NO_FILE => "업로드할 파일이 없음 ($error)",
    UPLOAD_ERR_NO_TMP_DIR => "웹서버에 임시폴더가 없음 ($error)",
    UPLOAD_ERR_CANT_WRITE => "웹서버에 파일을 쓸 수 없음 ($error)",
    UPLOAD_ERR_EXTENSION => "PHP 확장기능에 의한 업로드 중단 ($error)",
};
// 업로드 실패 시 오류 출력
if( $error != UPLOAD_ERR_OK )
{
    echo $result;
    exit;
}

$upload_file = $uploads_dir.'/'.$name; // 저장될 디렉터리 및 파일명
$fileinfo = pathinfo($upload_file); // 첨부파일의 정보를 가져옴
$ext = strtolower($fileinfo['extension']);

$i = 1;

while(is_file($upload_file))
{
    $name = $fileinfo['filename']."-{$i}.".$fileinfo['extension'];
    $upload_file = $uploads_dir.'/'.$name;
    $i++;
}

if( !in_array($ext, $allowed_ext) ) // 확장자 검사
{
    echo "허용되지 않는 확장자입니다.";
    exit;
}

if( !move_uploaded_file($_FILES['myfile']['tmp_name'], $upload_file) ) // 파일 이동
{
    echo "파일이 업로드 되지 않았습니다.";
    exit;
}
?>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
<h1>File Upload Example</h1>
    <h2>파일 정보</h2>
    <ul>
        <li>결과: <?php echo $result; ?></li>
        <li>파일명: <?php echo $name; ?></li>
        <li>확장자: <?php echo $ext; ?></li>
        <li>파일형식: <?php echo $_FILES['myfile']['type']; ?></li>
        <li>파일크기: <?php echo number_format($_FILES['myfile']['size']); ?> 바이트</li>
    </ul>
    <a href="./file_download.php?file=<?php echo $name; ?>">다운로드</a>
</body>
</html>