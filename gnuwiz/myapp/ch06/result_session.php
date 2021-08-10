<?php
session_start();
?>
<html>
<head>
    <title>Result Session</title>
</head>
<body>
<h1>Session Example</h1>
세션 값은 : <?php echo $_SESSION['mySession']; ?> 입니다.
</body>
</html>