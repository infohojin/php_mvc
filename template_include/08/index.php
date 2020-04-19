<?php
echo "안녕하세요<br>";

function hello($format)
{
    include "hello.php";
}

$format="Y-m-d"; // 날짜 포맷 지정
hello($format);


