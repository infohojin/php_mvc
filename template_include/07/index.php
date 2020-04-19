<?php
echo "안녕하세요<br>";

function hello($format)
{
    echo "오늘은". date($format). "입니다.";
}

$format="Y-m-d"; // 날짜 포맷 지정
hello($format);