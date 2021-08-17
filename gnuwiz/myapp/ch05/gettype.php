<?php
$name = "홍길동";
$age = 20;
$male = true;
$height = 1.85;
$salary = null;
$array = [1, 2, 3];
$object = new stdClass();

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($male).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo gettype($array).'<br>';
echo gettype($object).'<br>';