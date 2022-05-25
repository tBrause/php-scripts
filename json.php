<?php
# ARRAY Daten
##############################
$array_input = array(
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
$json_input = json_encode($array_input);

# JSON Datei erstellen
##############################
$bytes_input = file_put_contents("upload/myfile.json", $json_input);
#echo "The number of bytes written are $bytes_input.<br>";

#############################################################################

# JSON Daten aus Datei
##############################
$json_data = file_get_contents("upload/myfile.json");

# JSON zu ARRAY
##############################
$json_array = json_decode($json_data, true);

# FOREACH ARRAY
##############################
foreach ($json_array as $array) {
    echo $array["name"] . ' : ';
    echo $array["designation"] . '<br>';
}
echo '<br><br>';

#############################################################################

# JSON mit CURL
# DAUERT ZU LANGE
##############################
/*
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
*/
