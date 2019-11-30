<?php

namespace CodeblogPro\GeoLocationAddress\Tests;

class BlanksAndMocksAndConstants
{
    public static function getValidRegionName(): string
    {
        return 'New Jersey';
    }

    public static function getEmptyRegionName()
    {
        return null;
    }

    public static function getValidRegionCode(): string
    {
        return 'US-NJ';
    }
}
