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

// double // float
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

// Typen festlegen
echo '<h3>Typen festlegen</h3>';
// Zeichenkette
$var = (string) 4.2;
echo $var . ' ' . gettype($var) . '<br>';

// Ganzzahl
$var = (int) 4.2;
echo $var . ' ' . gettype($var) . '<br>';

// Fließkommazahl
$var = (float) 4.2;
echo $var . ' ' . gettype($var) . '<br>';

$var = (float) 4;
echo $var . ' ' . gettype($var) . '<br>';


// Boolescher Wert
$var = (bool) false;
echo $var . ' ' . gettype($var) . '<br>';

$var = (bool) true;
echo $var . ' ' . gettype($var) . '<br>';
