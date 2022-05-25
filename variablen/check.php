<?php

# EMPTY
##############################
# lange Form = if (empty($var) === true) {

if (empty($var)) {
    echo 'empty is false<br>';
}

$var = 3;

if (!empty($var)) {
    echo 'empty is true[' . $var . ']<br>';
}


# ISSET
##############################
# lange Form = if (isset($check_var) === true) {

# $check_var = isset($var);

if (isset($check_var)) {
    echo 'isset is true [' . $check_var . ']<br>';
}

if (!isset($check_var)) {
    echo 'isset is false<br>';
}
