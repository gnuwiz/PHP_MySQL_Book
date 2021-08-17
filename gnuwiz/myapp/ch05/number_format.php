<?php
$num = 2022.0108;

echo number_format(num: $num)."<br/>";
echo number_format(num: $num, decimals: 4)."<br/>";
echo number_format(num: $num, decimals: 4, decimal_separator: "#", thousands_separator: "!");