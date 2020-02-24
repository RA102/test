<?php declare(strict_types=1);
date_default_timezone_set('Asia/Almaty');

//echo __FILE__;

$pathFile = realpath('monitoring/file.txt');

if ($date1 != filemtime($pathFile)) {

}


$date1 = filemtime($pathFile);

$hash = hash_file('sha1', $pathFile);

$equalsHash = hash_equals($hash, sha1_file($file));



if ($equalsHash) {
    echo 'indentical';
} else {
    echo 'not identical';
}


//$pathhash = '/monitoring/file.txt';



//$newHash = hash_file("sha-1", $pathFile);

//echo date("F d Y H:i:s", filemtime(__DIR__ . '/monitoring/file.txt'));


