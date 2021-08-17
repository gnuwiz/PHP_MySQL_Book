<?php
$name = "홍길동";
$id = "hong";
$email = "hong@gmail.com";
?>
<html>
<head>
    <title>Hidden</title>
</head>
<body>
<h1>Hidden Example</h1>
    <form action="./post_result.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="submit" value="전송">
    </form>
</body>
</html>