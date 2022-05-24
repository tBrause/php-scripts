<?php
################# Fehlermeldungen deaktivieren !!!!
#error_reporting(0);

# document charset
header('Content-type: text/html; charset=utf-8');

# timezone
date_default_timezone_set('Europe/Berlin');

# http current file
$http_current_file = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . $_SERVER['QUERY_STRING'];
echo $http_current_file . '<br>';

# dir current file
$dir_current_file = $_SERVER['SCRIPT_FILENAME'];
echo $dir_current_file . '<br>';

# http current directory
echo $_SERVER['SCRIPT_NAME'] . '<br>';
