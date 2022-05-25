<?php
# ARRAY zu JSON Daten
##############################
// data strored in array
$array = array(
    "0" => array(
        "id" => "01",
        "name" => "Olivia Mason",
        "designation" => "System Architect"
    ),
    "1" => array(
        "id" => "02",
        "name" => "Jennifer Laurence",
        "designation" => "Senior Programmer"
    ),
    "2" => array(
        "id" => "03",
        "name" => "Medona Oliver",
        "designation" => "Office Manager"
    )
);

# ARRAY zu JSON
##############################
$json = json_encode($array);

# JSON Datei erstellen
##############################
$bytes = file_put_contents("upload/myfile.json", $json);
#echo "The number of bytes written are $bytes.<br>";

#############################################################################

# JSON Daten aus Datei
##############################
$json = file_get_contents("upload/myfile.json");

# JSON zu ARRAY
##############################
$myarray = json_decode($json, true);
var_dump($myarray); // prints array

echo '<br><br>';


$YourUrl = "upload/myfile.json";
//  Initiate curl session
$handle = curl_init();
// Will return the response, if false it prints the response
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($handle, CURLOPT_URL, $YourUrl);
// Execute the session and store the contents in $result
$result = curl_exec($handle);
// Closing the session
curl_close($handle);

$result = file_get_contents($YourUrl);
$array = json_decode($result, true);
var_dump($array);
