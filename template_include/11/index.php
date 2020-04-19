<?php
$msg = "안녕하세요. {{hello}} 감사합니다. <br>";

function hello($args=[])
{
    extract($args); // 배열을 분리
    ob_start();
    include "hello.php";
    return ob_get_clean();
}

$format="Y-m-d"; // 날짜 포맷 지정

$msg = str_replace("{{hello}}", hello(['format'=>$format]) ,$msg);
echo $msg;