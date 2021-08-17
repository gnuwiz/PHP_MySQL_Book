<?php
echo substr(string: 'gnuwiz', offset: 1)."<br/>";
echo substr(string: 'gnuwiz', offset: 1, length: 3)."<br/>";
echo substr(string: 'gnuwiz', offset: 0, length: 4)."<br/>";
echo substr(string: 'gnuwiz', offset: 0, length: 8)."<br/>";
echo substr(string: 'gnuwiz', offset: -1, length: 1)."<br/>";
echo "<br/>";

$email  = 'info@gnuwiz.com';
$domain = strstr(haystack: $email, needle: '@');
echo $domain."<br/>";

$user = strstr(haystack: $email, needle: '@', before_needle: true);
echo $user."<br/>";

$pos = strpos(haystack: $email, needle: "@");
echo $pos."<br/>";

$pos2 = strpos(haystack: $email, needle: '-');
if ($pos2 === false)
{
    echo "발견되지 않음";
} else {
    echo $pos2."위치에 있음";
}