<?php
session_start();


# gibt es noch keine Merkliste in der Sitzung, dann neues Objekt erstellen
if (!isset($_SESSION['merkliste'])) {

    # Objekt für die Merkliste bilden
    $merkliste = new WarenkorbFertig();
}
# gibt es schon eine Merkliste in der Sitzung, dann Objekt aus der Sitzung holen
else {
    # Merkliste als Objekt aus der Sitzung lesen
    $merkliste = $_SESSION['merkliste'];
}

# wurde ein Bild für die Merkliste geklickt
if (isset($merk_id)) {
    $merkliste->addToArtikelliste($merk_id);
}
# wurde ein Bild für entfernen geklickt
if (isset($loesch_id)) {
    $merkliste->remArtikelAt($loesch_id);
}
# wurde leeren geklickt
if (isset($leeren)) {
    $merkliste->remArtikelliste($leeren);
}

# wurde leeren geklickt
if (isset($add_id)) {
    $merkliste->addArtikelAnzahl($add_id);
}

if (isset($sub_id)) {
    $merkliste->subArtikelAnzahl($sub_id);
}
