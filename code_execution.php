<?php
// 拿 GET 參數直接執行
$data = $_GET["data"];
eval("echo \$data;");

