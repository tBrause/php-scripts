<?php
# starte Session
session_start();

# überprüfe ob Session erlaubt ist
if (!$_SESSION) {
    die('Keine Sessions erlaubt');
}

# PHP Session ID (wird automatisch vergeben)
echo 'session_id() : ' . session_id() . '<br>';

# existiert die Session [NAME] NICHT 
if (!isset($_SESSION['reloadlist'])) {
    # leg die Session [NAME] an und vergib einen Wert
    $_SESSION['reloadlist'] = 1;
} else {
    # zähle den Wert hoch
    $_SESSION['reloadlist']++;
}

echo "reloadlist : " . $_SESSION["reloadlist"] . "<br>";
