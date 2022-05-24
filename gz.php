<?php
$std_prefix = $_SERVER ["DOCUMENT_ROOT"];
echo $std_prefix."<br><br>";

$pfad = "";


$gz_pfad = "/var/www/vhosts/.../".$pfad;
if ($handle = opendir($gz_pfad)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			
			$tstring = explode(".", $entry);
			$dateiendung = end($tstring);

				//echo $entry."<br>";
				$gzfile = $gz_pfad.$entry.".gz";
				//echo $gzfile."<br>";
			//echo "".$gz_pfad."/".$entry."<br>";
			
			//echo mime_content_type("".$gz_pfad."/".$entry."")."<br>";
				
				if(mime_content_type("".$gz_pfad."/".$entry."") == "text/x-php" || mime_content_type("".$gz_pfad."/".$entry."") == "text/plain")
				{
					echo $gzfile."<br>";
					$fpgz = gzopen ($gzfile, 'w9');
					gzwrite ($fpgz, file_get_contents($gz_pfad.$entry));
					gzclose($fpgz);
					
				}
        }
    }
    closedir($handle);
}
?>
