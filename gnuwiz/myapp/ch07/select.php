<html>
<head>
    <title>Select</title>
</head>
<body>
<h1>Select Example</h1>
    <form action="./post_result.php" method="post">
        이름 :
        <select name="name">
            <option value="">선택하세요</option>
            <option value="홍길동">홍길동</option>
            <option value="임꺽정">임꺽정</option>
            <option value="장길산">장길산</option>
        </select>
        <br/>

        아이디 :
        <select name="id">
            <option value="">선택하세요</option>
            <option value="hong">hong</option>
            <option value="im">im</option>
            <option value="jang">jang</option>
        </select>
        <br/>

        이메일 :
        <select name="email">
            <option value="">선택하세요</option>
            <option value="hong@gmail.com">hong@gmail.com</option>
            <option value="im@gmail.com">im@gmail.com</option>
            <option value="jang@gmail.com">jang@gmail.com</option>
        </select>
        <br/>
        <input type="submit" value="전송">
    </form>
</body>
</html>