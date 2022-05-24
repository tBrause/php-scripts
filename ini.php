################# Fehlermeldungen deaktivieren !!!!
#error_reporting(0);

# document charset
header('Content-type: text/html; charset=utf-8');

# timezone
date_default_timezone_set('Europe/Berlin');

# mysqli charset
mysqli_set_charset($conn, 'utf8');
