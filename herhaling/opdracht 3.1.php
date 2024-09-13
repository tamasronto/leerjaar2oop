<?php

$cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];

echo "Eerste stad: " . $cities[0] . "<br>";
echo "Laatste stad: " . $cities[count($cities) - 1] . "<br>";

$cities[] = "Eindhoven";

echo "Toegevoegde stad: " . $cities[count($cities) - 1];
?>
