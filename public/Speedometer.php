<?php

class Speedometer
{
    const KM_TO_MILES = 0.621;

    public static function convertKmToMiles($km): float
    {
        return round($km * self::KM_TO_MILES, 2);
    }

    public static function convertMilesToKm($miles ): float
    {
        return round($miles / self::KM_TO_MILES, 2);
    }
}