<?php
$domain = 'gnuwiz.com';

$ip = gethostbyname(hostname: $domain);
echo $ip."<br/>";

$ip_number = ip2long(ip: $ip);
echo $ip_number."<br/>";

$ip_address = long2ip(ip: $ip_number);
echo $ip_address."<br/>";