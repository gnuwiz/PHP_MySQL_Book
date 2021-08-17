<?php
$directory = "./";
if(is_dir(filename: $directory))
{
    echo "{$directory} 디렉터리가 있습니다.<br/>";
} else {
    echo "{$directory} 디렉터리가 없습니다.<br/>";
}

$directory = "../ch05";
if(is_dir(filename: $directory))
{
    echo "{$directory} 디렉터리가 있습니다.<br/>";
} else {
    echo "{$directory} 디렉터리가 없습니다.<br/>";
}

$file = __FILE__;
if(is_file($file))
{
    echo "{$file} 파일이 있습니다.<br/>";
} else {
    echo "{$file} 파일이 없습니다.<br/>";
}

if(file_exists(filename: $directory))
{
    echo "{$directory} 파일이나 디렉터리가 있습니다.<br/>";
} else {
    echo "{$directory} 파일이나 디렉터리가 없습니다.<br/>";
}

if(file_exists(filename: $file))
{
    echo "{$file} 파일이나 디렉터리가 있습니다.<br/>";
} else {
    echo "{$file} 파일이나 디렉터리가 없습니다.<br/>";
}