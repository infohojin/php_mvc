<?php

$ch = curl_init("https://docs.google.com/document/d/e/2PACX-1vQA37pIcClekM_osrkMpMdsc-UXZI2ts0Yn6mM0ezuqJeK_taL_71iftQdiL0XFPuCTGY6v5o4VFpTd/pub");
$fp = fopen("docs.html","w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, false);

curl_exec($ch);
curl_close($ch);

fclose($fp);