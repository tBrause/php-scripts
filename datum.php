<?php
$tz = new DateTimeZone('Europe/Berlin');
$transitions = $tz->getTransitions(time());
$utc_plus = $transitions[0]['offset'];
if ($utc_plus == 3600) {
    echo "Winterzeit<br>";
    $som_win_dif = 3600;
    $gmt = 1;
} else {
    echo "Sommerzeit<br>";
    $som_win_dif = 7200;
    $gmt = 2;
}
# https://www.php.net/manual/de/timezones.php
$timezones = array('Europe/London', 'Europe/Berlin', 'Asia/Hong_Kong', 'America/Curacao');

foreach ($timezones as $tz) {

    # DateTimeZone
    $tzi = new DateTimeZone('' . $tz . '');
    var_dump($tzi);
    echo '<br>';

    # DateTime
    $dateTime = new DateTime("now", $tzi);
    var_dump($dateTime);
    echo '<br>ffff<br>';

    #$transition = $dateTime->getTransitions(time());
    #var_dump($transition[0]['date']);

    $timeOffset = (array)$dateTime;
    var_dump($timeOffset["date"]);

    //$date = date("H:i:s", $timeOffset["date"]);



    $transitions = $tzi->getTransitions(time());
    #var_dump($transitions[0]['offset']);
    #echo '<br>';

    #var_dump($transitions[0]['time']);
    #echo '<br>';


    if ($transitions[0]['offset'] < 0) {
        #echo 'negativ <br>';
    } else {
        $sub = substr($transitions[0]['time'], 0, 19);
        $end = $sub . "+" . $transitions[0]['offset'];
        #echo $end . '<br>';
        #var_dump($transitions[0]['time'] + $transitions[0]['offset']);
        #echo 'positiv <br>';
    }

    #var_dump($transitions[0]);
    echo '<br>';
    echo '<br>';
}

// Create two timezone objects, one for Taipei (Taiwan) and one for
// Tokyo (Japan)
$dateTimeZoneTaipei = new DateTimeZone("Asia/Taipei");
$dateTimeZoneJapan = new DateTimeZone("Asia/Tokyo");

// Create two DateTime objects that will contain the same Unix timestamp, but
// have different timezones attached to them.
$dateTimeTaipei = new DateTime("now", $dateTimeZoneTaipei);
$dateTimeJapan = new DateTime("now", $dateTimeZoneJapan);

// Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// object, but using the timezone rules as defined for Tokyo
// ($dateTimeZoneJapan).
$timeOffset = $dateTimeZoneJapan->getOffset($dateTimeTaipei);

// Should show int(32400) (for dates after Sat Sep 8 01:00:00 1951 JST).
var_dump($timeOffset);
