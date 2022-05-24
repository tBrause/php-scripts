<?php
# REQUEST
$var = trim(substr(@$_REQUEST['var'], 0, 2));
echo $var . ' ' . gettype($var) . '<br>';

# INPUT_POST
$var1 = trim(substr(filter_input(INPUT_POST, 'var1'), 0, 10));
echo $var1 . ' ' . gettype($var1) . '<br>';

# INPUT_GET
$var2 = trim(substr(filter_input(INPUT_GET, 'var2'), 0, 1));
echo $var2 . ' ' . gettype($var2) . '<br>';

# FILES
$datei = @$_FILES['datei'];

echo '<a href="?var=1">link</a><br>';
echo '<a href="?var1=1">link</a><br>';
echo '<a href="?var2=1">link</a><br>';
