<?php
// 拿 GET 參數直接執行
$whitelist = array("ls");
$data = $_GET["data"];
if (in_array($data, $whitelist))
{
    eval("echo \$data;");
}

