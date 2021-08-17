<?php
echo time()."<br/>";

$time = mktime(hour: 14, minute: 20, second: 29, month: 1, day: 8, year: 2022);
echo $time."<br/>";
echo microtime()."<br/>";
echo microtime(as_float: true)."<br/>";
echo date(format: 'Y-m-d H:i:s', timestamp: $time)."<br/>";

$datetime = new DateTime(datetime: '2022-02-08 09:10:29');
echo $datetime->format(format: "Y-m-d H:i:s")."<br/>";

$datetime2 = new DateTime(datetime: '2022-01-01 00:00:00');
$date_diff = $datetime->diff($datetime2);
echo $date_diff->format(format: '%a')."<br/>";
echo $date_diff->days."<br/>";