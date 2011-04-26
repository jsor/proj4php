<?php
include_once("../proj4php/proj4php.php");


$proj4 = new Proj4php();

$projL93 = new Proj4phpProj('EPSG:2154');
$projWGS84 = new Proj4phpProj('EPSG:4326');

// GPS
// latitude        longitude
// 48,831938       2,355781
// 48°49'54.977''  2°21'20.812''
//
// L93
// 652709.401   6859290.946

$pointSrc = new proj4phpPoint('652709.401','6859290.946');
echo "Source : ".$pointSrc->toShortString()."<br>";
$pointDest = $proj4->transform($projL93,$projWGS84,$pointSrc);
echo "Conversion : ".$pointDest->toShortString()."<br><br>";


$pointSrc = new proj4phpPoint('2.355781','48.831938');
echo "Source : ".$pointSrc->toShortString()."<br>";
$pointDest = $proj4->transform($projWGS84,$projL93,$pointSrc);
echo "Conversion : ".$pointDest->toShortString()."<br>";