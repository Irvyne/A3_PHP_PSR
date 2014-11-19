#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: Mou
 * Date: 18/11/14
 * Time: 18:21
 */

echo 'test'.PHP_EOL;

$lenght = (isset($argv[1]) && (int)$argv[1] > 0) ? (int)$argv[1] : mt_rand(20, 30);
$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$€£%!@#&éè';
$password = '';

for ($i = 0; $i < $length; $i++){
    $password .= mb_substr($string, mt_rand(0, mb_strlen($string)-1), 1);
}

echo $password.PHP_EOL;

