<?php
$languages = [
    'PHP',
    'MySQL',
    'HTML',
    'CSS',
    'Javascript',
];

$filter = array_filter(array: $languages, callback: function($val){
    if(strlen($val) <= 4)
    {
        return true;
    }else{
        return false;
    }
});
echo "<pre>";
print_r($filter);
echo "</pre>";

$map = array_map(callback: function($val){
    $upper_string = strtoupper($val);
    return $upper_string;
}, array: $languages);
echo "<pre>";
print_r($map);
echo "</pre>";

$reduce = array_reduce(array: $languages, callback: function($carry, $item){
    $len = strlen($item);
    $result = $carry + $len;
    return $result;
}, initial: 0);
echo "<pre>";
print_r($reduce);
echo "</pre>";