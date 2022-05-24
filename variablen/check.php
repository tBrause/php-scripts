<?php

# EMPTY
##############################
// if (empty($var)) {
if (empty($var) === true) {
    #if (is_null())
    echo 'empty false<br>';
}

$var = 3;

// if (!empty($var)) {
if (empty($var) === false) {
    echo $var . ' empty true<br>';
}


# ISSET
##############################
$check_var = isset($var);

if (isset($check_var) === true) {
    echo $var . 'true';
}

if (isset($check_var) == 1) {
    echo $var . 'true';
}
