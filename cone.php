<?php
// $con = curl_init("http://127.0.0.1:32726/");
$con = curl_init("https://api-n.ddev.site/");
curl_exec($con);
$msg = curl_getinfo($con, CURLINFO_HTTP_CODE);
curl_close($con);
print_r($msg);
