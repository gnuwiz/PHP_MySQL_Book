<?php
$file = fopen(filename: "write.txt", mode: "w");
fwrite(stream: $file, data: "안녕하세요.");
fclose(stream: $file);