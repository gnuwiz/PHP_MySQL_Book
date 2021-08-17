<?php
$curl = curl_init();
curl_setopt($curl, option: CURLOPT_URL, value: 'http://gnuwiz.com');
$content = curl_exec($curl);
curl_close($curl);

echo $content;