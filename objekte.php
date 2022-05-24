<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // Ausgabe 'bool(true)' von PHP 7.2.0 an; 'bool(false)' zuvor
var_dump(key($obj)); // Ausgabe 'string(1) "1"' von PHP 7.2.0 an;  'int(1)' zuvor