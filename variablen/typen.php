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
$var = 5.2;
echo gettype($var) . '<br>';

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
