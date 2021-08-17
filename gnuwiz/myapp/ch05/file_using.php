<?php
$filename = "text.txt";

$fp = fopen(filename: $filename, mode: 'r');
while ($reading = fgetc(stream: $fp))
{
    echo $reading."<br/>";
}
fclose(stream: $fp);

$fp = fopen(filename: $filename, mode: 'r');
while ($reading = fgets(stream: $fp))
{
    echo $reading."<br/>";
}

rewind(stream: $fp);

$length = filesize(filename: $filename);
$string = fread(stream: $fp, length: $length);
fclose(stream: $fp);

$string = nl2br($string);
echo $string;