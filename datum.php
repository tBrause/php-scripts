<?php
# Sommerzeit- und Winterzeit
$tz = new DateTimeZone('Europe/Berlin');
$transitions = $tz->getTransitions(time());
$utc_plus = $transitions[0]['offset'];
if ($utc_plus == 3600) {
    echo "Winterzeit in Berlin<br>";
    $som_win_dif = 3600;
    $gmt = 1;
} else {
    echo "Sommerzeit in Berlin<br>";
    $som_win_dif = 7200;
    $gmt = 2;
}

# timestamp
$timestamp = time();
echo 'timestamp : ' . $timestamp . '<br>';

# date
$date = date("d.m.Y H:i:s", $timestamp);
echo 'date : ' . $date . '<br>';

# UTC
/*
date_default_timezone_set('UTC');
$timestamp_utc = time();
echo 'timestamp_utc : ' . $timestamp_utc . '<br>';
*/

# mktime
echo date('d.m.Y', mktime(0, 0, 0, 12, 13, 2006));



# https://www.php.net/manual/de/timezones.php
$timezones = ['Europe/Berlin', 'Europe/London', 'Europe/Paris', 'Europe/Gibraltar', 'Asia/Hong_Kong', 'America/Curacao', 'Africa/Cairo', 'Asia/Tehran', 'Africa/Casablanca', 'America/Toronto'];

echo '<ul style="display:flex;">';
foreach ($timezones as $tz) {

    # DateTimeZone
    $dtz = new DateTimeZone('' . $tz . '');

    # DateTime
    $dateTime = new DateTime("now", $dtz);

    # timeOffset
    $timeOffset = (array)$dateTime;

    echo '<li style="display:block; margin-bottom:30px; min-width:140px;">';

    # timezone
    echo $timeOffset["timezone"] . '<br>';

    # php class DateTime
    $date = \DateTime::createFromFormat('Y-m-d H:i:s', substr($timeOffset["date"], 0, 19));

    # Datum
    echo $date->format("d.m.Y") . '<br><br>';

    echo '<span style="padding:10px; font-weight:700; background-color:#ccc;">';

    # Uhrzeit
    echo $date->format("H:i:s");

    echo '</span>';
    echo '</li>';
}

echo '</ul>';
