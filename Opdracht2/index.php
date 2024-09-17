<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

function readFiles() {
    
    opendir(FILES_PATH);
    foreach(scandir(FILES_PATH) as $file){
        var_dump($file);
    }
    closedir(FILES_PATH);
 
}

readFiles();
var_dump($file);

