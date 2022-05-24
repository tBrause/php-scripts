<?php

// ARRAY öffnen
$array_elemente = array();
// oder
$array_elemente = [];

// Type der Variable
echo gettype($array_elemente) . '<br>';

// WERTE einem ARRAY zuweisen
$array_elemente = array('eins', 'zwei');
// oder
$array_elemente = ['eins', 'zwei'];

// ANZAHL der WERTE in einem ARRAY
$array_elemente_count = count($array_elemente);

// WERTE HINZUFÜGEN
array_push($array_elemente, 'drei', 'vier');
print_r($array_elemente);

// ist ein WERT im ARRAY vorhanden
$search = 'eins';
if (in_array($search, $array_elemente)) {
    echo "eins enthalten<br>";
}

// FOREACH ARRAY
echo '<ul>';
foreach ($array_elemente as $element) {
    echo '<li>' . $element . '</li>';
}
echo '</ul>';

// FOR ARRAY
echo '<ul>';
for ($index = 0; $index < count($array_elemente); $index++) {
    echo '<li>' . $array_elemente[$index] . '</li>';
}
echo '</ul>';

#### ARRAYS mit Schlüßeln

$array_elemente_key = array('eins' => 'e', 'zwei' => 'z');

echo '<ul>';
foreach ($array_elemente as $element => $value) {
    echo '<li>' . $element . $value . '</li>';
}
echo '</ul>';

// array_keys
$array = array(0 => 100, "Farbe" => "rot");
print_r(array_keys($array));

// array_values
$array = array("größe" => "XL", "farbe" => "gold");
print_r(array_values($array));

// array_combine
$a = array('gruen', 'rot', 'gelb');
$b = array('avokado', 'apfel', 'banane');
$c = array_combine($a, $b);

print_r($c);
