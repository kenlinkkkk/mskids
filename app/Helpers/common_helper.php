<?php

/**
 * @param $key
 * @param $data
 * @return bool|string
 */
function aes128Encrypt($key, $data) {
    return base64_encode(openssl_encrypt($data, 'aes-128-ecb', $key, OPENSSL_RAW_DATA));
}

/**
 * @param $key
 * @param $data
 * @return bool|string
 */
function aes128Decrypt($key, $data) {
    return openssl_decrypt(base64_decode($data), 'aes-128-ecb', $key, OPENSSL_RAW_DATA);
}


function sluggify($string, $separator = '-', $maxLength = 200)
{
    $title = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
    $title = preg_replace('%[^-/+|\w ]%', '', $title);
    $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
    $title = preg_replace('/[\/_|+ -]+/', $separator, $title);

    return $title;
}