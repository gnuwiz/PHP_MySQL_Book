<?php
$filename = "text.txt"; // 읽어들일 원본 파일명
$content = file_get_contents(filename: $filename);
file_put_contents(filename: "text2.txt", data: $content);