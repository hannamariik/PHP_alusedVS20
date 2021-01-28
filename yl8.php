<?php
$break = "\n";
date_default_timezone_set('Europe/Tallinn');

$synnip = "28.05.1998";
$synnip = explode(".", $synnip);
$vanus = (date("md", date("U", mktime(0, 0, 0, $synnip[0], $synnip[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $synnip[2]) - 1)
    : (date("Y") - $synnip[2]));
echo "Kasutaja saab " $vanus " aastaseks.";

$cdate = mktime(0, 0, 0, 05, 28, 2021);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }
echo "Kooliaasta lõpuni: ". floor($difference/60/60/24)." päeva.".$break;

echo "🌧🌧🌧🌧🌧🌧🌧🌧";
