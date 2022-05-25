<?php
# Typen von PHP Variablen
##############################
# string, integer, double, boolean, array, object

// string in integer
$var = '5';
echo intval($var) . '<br>';

// integer
$var = 5;
echo gettype($var) . '<br>';

// double
$var = 5425.2756;
$var2 = 2.3;
echo gettype($var) . '<br>';
echo ($var * $var2) . '<br>';

# round
echo round($var, 1) . '<br>';

# deutsches Zahlenformat
echo number_format($var, 2, ',', '.') . '<br>';
