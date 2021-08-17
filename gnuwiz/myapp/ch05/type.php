<?php
// 변수의 유형이 배열인지 여부를 찾습니다.
is_array(array(1, 2, 3)); // true
is_array([1, 2, 3]); // true

// 변수가 부울인지 여부를 확인합니다.
is_bool(true); // true
is_bool(false); // false

// 변수의 유형이 실수인지 여부를 찾습니다.
is_float(1.25); // true
is_float(2); // false

// 변수의 유형이 정수인지 여부를 찾습니다.
is_int(3); // true
is_int(3.4); // false

// 변수가 null인지 여부를 찾습니다.
is_null(null); // true
is_null("null"); // false

// 변수가 숫자인지 숫자 문자열인지 찾습니다.
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// 변수 유형이 문자열인지 여부를 찾습니다.
is_string("123"); // true
is_string(123); // false