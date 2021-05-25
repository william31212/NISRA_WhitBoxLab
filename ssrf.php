<?php
$whitelist = array(
  "https://www.sonarsource.com"
);
$url = $_GET["url"];
if (in_array($url, $whitelist)) {
  $resp = file_get_contents($url);
  // ...
}