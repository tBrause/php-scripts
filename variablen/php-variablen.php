<?php

# Magische Konstanten
##############################
echo '<h3>Magische Konstanten</h3>';
echo 'Projektverzeichnis: ' . __DIR__ . '<br>';
echo 'Datei auf dem Gerät: ' . __FILE__ . '<br>';
echo 'Anzahl der Zeilen in der Datei: ' . __LINE__ . '<br>';
//echo __METHOD__ . '<br>';


# $_SERVER
##############################
echo '<h3>$_SERVER</h3>';

echo 'Produkoll: ' . $_SERVER['REQUEST_SCHEME'] . '<br>';
echo 'HTTP: ' . $_SERVER['HTTP_HOST'] . '<br>';
echo 'Domain: ' . $_SERVER['SERVER_NAME'] . '<br>';
echo 'Port: ' . $_SERVER['SERVER_PORT'] . '<br>';

echo 'Datei mit Pfad bis zum Hauptverzeichnis: ' . $_SERVER['SCRIPT_NAME'] . '<br>';
echo 'Datei über HTTP/S: ' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '<br>';
echo 'Datei OS: ' . $_SERVER['SCRIPT_FILENAME'] . '<br>';
echo 'QUERY_STRING: ' . $_SERVER['QUERY_STRING'] . '<br>';

# COOKIE
##############################
echo '<h3>$_COOKIE</h3>';
echo 'COOKIE: ' . $_COOKIE['PHPSESSID'] . '<br>';
