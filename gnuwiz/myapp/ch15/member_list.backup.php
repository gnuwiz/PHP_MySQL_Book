<?php
include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.
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
        <?php
        $mb_id = $_SESSION['ss_mb_id'];

        $sql = " SELECT COUNT(*) AS `cnt` FROM member"; // member 테이블에 등록되어있는 회원의 수를 구함
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_count = $row['cnt'];

        $page_rows = 10; // 페이지당 목록 수 설정
        $page = $_GET['page'];

        $total_page  = ceil($total_count / $page_rows);  // 전체 페이지 계산
        if ($page < 1) { $page = 1; } // GET으로 넘어온 페이지가 없으면 첫 페이지 (1 페이지)
        $from_record = ($page - 1) * $page_rows; // 시작 열을 구함

        $list = array(); // 회원 정보를 담을 배열 선언

        $sql = " SELECT * FROM member ORDER BY mb_datetime desc LIMIT {$from_record}, {$page_rows} "; // 회원 정보를 조회
        $result = mysqli_query($conn, $sql);
        for ($i=0; $row=mysqli_fetch_assoc($result); $i++) {
            $list[$i] = $row;
            $list_num = $total_count - ($page - 1) * $page_rows; // 회원 순번
            $list[$i]['num'] = $list_num - $i;
        }

        $str = '<ul class="pagination">'; // 페이징 시작
        if ($page > 1) {
            $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page=1">처음</a></li>';
        }

        $start_page = ( ( (int)( ($page - 1 ) / $page_rows ) ) * $page_rows ) + 1;
        $end_page = $start_page + $page_rows - 1;

        if ($end_page >= $total_page) {
            $end_page = $total_page;
        }

        if ($start_page > 1) {
            $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page='.($start_page-1).'">이전</a></li>';
        }

        if ($total_page > 1) {
            for ($k=$start_page;$k<=$end_page;$k++) {
                if ($page != $k)
                    $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page='.$k.'">'.$k.'</a></li>';
                else
                    $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page='.$k.'">'.$k.'</a></li>';
            }
        }

        if ($total_page > $end_page) {
            $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page='.($end_page+1).'">다음</a></li>';
        }

        if ($page < $total_page) {
            $str .= '<li class="page-item"><a class="page-link" href="./member_list.php?page='.$total_page.'">맨끝</a></li>';
        }

        $str .= '</ul>';

        if ($str) // 페이지가 있다면 생성
            $write_page = "<nav>{$str}</nav>";
        else
            $write_page = "";

        mysqli_close($conn); // 데이터베이스 접속 종료
        ?>
        <table class="table table-striped">
            <caption>Total <?php echo number_format($total_count) ?>명 <?php echo $page ?> 페이지</caption>
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
            <?php
            for ($i=0; $i<count($list); $i++) {
                ?>
                <tr>
                    <td><?php echo $list[$i]['num'] ?></td>
                    <td><?php echo $list[$i]['mb_id'] ?></td>
                    <td><?php echo $list[$i]['mb_name'] ?></td>
                    <td><?php echo $list[$i]['mb_email'] ?></td>
                    <td><?php echo $list[$i]['mb_job'] ?></td>
                    <td><?php echo $list[$i]['mb_gender'] ?></td>
                    <td><?php echo $list[$i]['mb_language'] ?></td>
                    <td><?php echo $list[$i]['mb_datetime'] ?></td>
                </tr>
            <?php } ?>
            <?php if (count($list) == 0) { echo '<tr><td colspan="8">등록된 회원이 없습니다.</td></tr>'; } ?>
            </tbody>
        </table>

        <p><?php echo $write_page;  ?><!-- 페이지 --></p>
        <a href="./register.php" class="btn btn-primary">회원정보수정</a>
        <a href="./logout.php" class="btn btn-danger">로그아웃</a>
    </div>
</div>

</body>
</html>