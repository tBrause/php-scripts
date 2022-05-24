<?php
# Typen von PHP Variablen
# string, integer, double, boolean, array, object

// string
$var = 'string';

// Type der Variable
echo gettype($var) . '<br>';

// integer
$var = 5;
echo gettype($var) . '<br>';

// double
$var = 5.2256;
$var2 = 2.3;
echo gettype($var) . '<br>';
echo ($var * $var2) . '<br>';

// boolean
$var = true;
echo gettype($var) . '<br>';

// array
$var = [];
echo gettype($var) . '<br>';

// objekt
class foo
{
    //
}
$var = new foo;
echo gettype($var) . '<br>';
