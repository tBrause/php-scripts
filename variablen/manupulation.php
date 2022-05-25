<?php
# HANDLING von PHP Variablen
##############################

# string in integer
##############################
$var = '5';
echo intval($var) . '<br>';

# mit verschiedenen Typen rechnen
##############################
$var = 5545.2756;
$var2 = 2;
$var3 = '2 ddd';

# sind Zeichen enthalten
if (!is_numeric($var3)) {
    echo 'Zeichen enthalten<br>';
}

echo '$var : ' . gettype($var) . ' [' . $var . ']<br>';
echo '$var2 : ' . gettype($var2) . ' [' . $var2 . ']<br>';
echo '$var3 : ' . gettype($var3) . ' [' . $var3 . ']<br>';
echo '$var3 : ' . gettype((float)$var3) . ' [' . (float)$var3 . ']<br>';

# Werte addieren
$sum = (float)$var + (float)$var2 + (float)$var3;
echo '$sum : ' . $sum . '<br>';

# Wert round
echo 'round : ' . round($sum, 2) . '<br>';

# Wert deutsches Zahlenformat
echo 'number_format : ' . number_format($sum, 2, ',', '.') . '<br>';
