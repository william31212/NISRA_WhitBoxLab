<?php
$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048, // Noncompliant
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$res = openssl_pkey_new($config);