<?php

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

// encode array to json
$json = json_encode($array);
$bytes = file_put_contents("upload/myfile.json", $json);

echo "The number of bytes written are $bytes.";
