<?php

/*
    File handling is the ability to read and write
    files on the server.
    PHP has built in functions to do this.
 */

$file = 'extras/users.txt';


if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Kevin' . PHP_EOL . 'Michelle' . PHP_EOL . 'Ivan';
    fwrite($handle, $contents);
    fclose($handle);
}
