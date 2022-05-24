<?php

$gz_pfad = "...";
if ($handle = opendir($gz_pfad)) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != "..") {

			$tstring = explode(".", $entry);
			$dateiendung = end($tstring);

			$gzfile = $gz_pfad . $entry . ".gz";
			if (mime_content_type("" . $gz_pfad . "/" . $entry . "") == "text/x-php" || mime_content_type("" . $gz_pfad . "/" . $entry . "") == "text/plain") {
				echo $gzfile . "<br>";
				$fpgz = gzopen($gzfile, 'w9');
				gzwrite($fpgz, file_get_contents($gz_pfad . $entry));
				gzclose($fpgz);
			}
		}
	}
	closedir($handle);
}
