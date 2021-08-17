<?php
$num = 255;
echo decbin(num: $num)."<br/>";
echo decoct(num: $num)."<br/>";
echo dechex(num: $num)."<br/>";
echo "<br/>";
echo base_convert(num: "255", from_base: 10, to_base: 16)."<br/>";
echo base_convert(num: "ff", from_base: 16, to_base: 10)."<br/>";