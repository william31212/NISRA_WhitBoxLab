<?php
$data = $_GET["data"];

list($hash, $data) = explode('|', $data, 2);
$hash_confirm = hash_hmac("sha256", $data, "secret-key");

// Confirm that the data integrity is not compromised
if ($hash === $hash_confirm) {
  $object = unserialize($data);
  // ...
}