<?php
session_start();
$session_value = "홍길동";
$_SESSION["mySession"] = $session_value;
?>
<html>
<head>
    <title>Create Session</title>
</head>
<body>
<h1>Session Example</h1>
세션을 만듭니다.<br/>
세션 내용은 <a href="./result_session.php">여기로</a>!!!
</body>
</html>