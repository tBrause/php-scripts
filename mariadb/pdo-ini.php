<?php
################# connection to the database ###

define('DBHOST', 'localhost');
define('DBUSER', '');
define('DBPASS', '');
define('DBNAME', '');
define('DBSYTEM', 'mysql');
define('DBPORT', '3306');
define('DBDSN', DBSYTEM . ':dbname=' . DBNAME . ';host:' . DBHOST . ';port=' . DBPORT);

# Datenbank Klasse
$pdo = new PDO(DBDSN, DBUSER, DBPASS);

$statement = $pdo->query($sql);
$colcount = $statement->columnCount();
