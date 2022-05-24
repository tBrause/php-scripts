<?php
# Check COOKIE
##############################
if (!$_COOKIE) {
    die('Keine Cookies erlaubt');
}

# Speicherdauer
##############################
$cookie_age = (2 * 24 * 60 * 60);

# 
##############################
$uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . $_SERVER['QUERY_STRING'];
echo $uri . '<br>';

# existiert das Coockie [NAME] NICHT 
##############################
if (!isset($_COOKIE['reloadlist'])) {
    # Setze Cookie
    setcookie('reloadlist', 0, time() + $cookie_age);
    header('Location: ' . $uri . '');
} else {
    setcookie('reloadlist', $_COOKIE['reloadlist'] + 1, time() + $cookie_age);
    #header('Location: ' . $uri . '');
}

# Lese Cookie
##############################
var_dump($_COOKIE['reloadlist']);
