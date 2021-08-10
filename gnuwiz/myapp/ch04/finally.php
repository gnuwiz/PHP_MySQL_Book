<?php
try {
    throw new Exception("예외를 던집니다.");
} catch (Throwable $e) {
    echo $e->getMessage();
    echo "<br/>";
} finally {
    echo "finally 블록입니다.";
}