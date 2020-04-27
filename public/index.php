<?php

require_once 'Speedometer.php';

echo "Here is the conversion of 10 Km in Miles, through the public static function 'convertKmToMiles(\$km)' of the class 'Speedometer' : <br>";
echo (Speedometer::convertKmToMiles(10) . "<br>");

echo "Here is the conversion of 10 Miles in Km, through the public static function 'convertMilesToKm(\$miles)' of the class 'Speedometer' : <br>";
echo (Speedometer::convertMilesToKm(10) . "<br>");