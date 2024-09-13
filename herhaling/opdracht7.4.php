<?php
$ipAddress = $_SERVER['REMOTE_ADDR'];
$serverPort = $_SERVER['SERVER_PORT'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Verkrijg het besturingssysteem
$os = 'Onbekend OS';
if (strpos($userAgent, 'Windows NT 10.0') !== false) $os = 'Windows 10';
elseif (strpos($userAgent, 'Windows NT 6.3') !== false) $os = 'Windows 8.1';
elseif (strpos($userAgent, 'Windows NT 6.2') !== false) $os = 'Windows 8';
elseif (strpos($userAgent, 'Windows NT 6.1') !== false) $os = 'Windows 7';
elseif (strpos($userAgent, 'Macintosh; Intel Mac OS X') !== false) $os = 'Mac OS X';
elseif (strpos($userAgent, 'Linux') !== false) $os = 'Linux';

// Verkrijg de browser
$browser = 'Onbekende browser';
if (strpos($userAgent, 'Firefox') !== false) $browser = 'Mozilla Firefox';
elseif (strpos($userAgent, 'Chrome') !== false) $browser = 'Google Chrome';
elseif (strpos($userAgent, 'Safari') !== false) $browser = 'Apple Safari';
elseif (strpos($userAgent, 'Opera') !== false) $browser = 'Opera';
elseif (strpos($userAgent, 'Trident') !== false || strpos($userAgent, 'MSIE') !== false) $browser = 'Internet Explorer';

// Toon de informatie
echo "IP-adres: " . $ipAddress . "<br>";
echo "Serverpoort: " . $serverPort . "<br>";
echo "Besturingssysteem: " . $os . "<br>";
echo "Browser: " . $browser . "<br>";
?>
