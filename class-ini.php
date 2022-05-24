################# Klassen laden ###
function klassenladen($klassenname)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/' . PAHT . '/class/' . $klassenname . '.php';
}

# Autoload-Funktionen für PHP registrieren
spl_autoload_register('klassenladen');
