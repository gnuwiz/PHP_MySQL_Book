<html>
<head>
    <title>Checkbox Result</title>
</head>
<body>
<h1>Checkbox Example</h1>
    <?php
    if(isset($_POST['fruit'])) {
        echo "선택한 과일은 <br/>";
        for($i=0; $i<count($_POST['fruit']); $i++) {
            $fruit = $_POST['fruit'][$i];
            echo $fruit."<br/>";
        }
        echo "입니다.";
    } else {
        echo "선택한 과일이 없습니다.";
    }
    ?>
</body>
</html>