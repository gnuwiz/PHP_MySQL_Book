<?php
include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.
// todo 테이블에 등록되어있는 목록을 조회
$sql = " SELECT * FROM todo ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);
mysqli_close($conn); // 데이터베이스 접속 종료
?>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div id="toDo" class="container">
    <div class="row justify-content-sm-center">
        <div class="col-sm-5">
            <form action="./app/add.php" method="POST" class="add_section">
                <div class="card">
                    <h2 class="card-header text-center">To Do List</h2>
                    <div class="gw-example">
                        <div class="form-group">
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="무슨일을 추가할까요?">
                        </div>
                        <div class="d-grid margin-top-2">
                            <button type="submit" class="btn btn-primary">추가</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-sm-center">
        <div class="col-sm-5">
            <section class="show_todo_section margin-top-2">
                <?php if (mysqli_num_rows($result) <= 0) { ?>
                    <div class="card gw-example">
                        <div class="card-body box-shadow border-radius-1">
                            등록된 To Do List가 없습니다.
                        </div>
                    </div>
                <?php } ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="card card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           onclick="location.href='./app/check.php?id=<?php echo $row['id'] ?>'"
                                           <?php echo $row['checked'] ? 'checked' : '' ?>>
                                </div>
                                <h5 class="<?php echo $row['checked'] ? 'gw-checked' : '' ?>">
                                    <?php echo $row['title'] ?>
                                </h5>
                            </div>
                            <a href="./app/remove.php?id=<?php echo $row['id'] ?>"
                               id="<?php echo $row['id'] ?>"
                               class="btn btn-outline-secondary btn-sm">삭제
                            </a>
                        </div>
                        <small>등록일시: <?php echo $row['datetime'] ?></small>
                    </div>
                <?php endwhile; ?>
            </section>
        </div>
    </div>
</div>

</body>
</html>