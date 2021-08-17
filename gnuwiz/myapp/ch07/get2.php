<?php
$name = "홍길동";
$id = "hong";
$email = "hong@gmail.com";
?>

<html>
<head>
    <title>Get</title>
</head>
<body>
<h1>Get Example</h1>
    <a href="./get_result.php?name=<?php echo $name; ?>&id=<?php echo $id; ?>&email=<?php echo $email; ?>">전송</a>
</body>
</html>