<?php
$name = "홍길동";
$age = 20;
$male = true;
$height = 1.85;
$salary = null;
$array = [1, 2, 3];
$object = new stdClass();

echo get_debug_type($name).'<br>';
echo get_debug_type($age).'<br>';
echo get_debug_type($male).'<br>';
echo get_debug_type($height).'<br>';
echo get_debug_type($salary).'<br>';
echo get_debug_type($array).'<br>';
echo get_debug_type($object).'<br>';