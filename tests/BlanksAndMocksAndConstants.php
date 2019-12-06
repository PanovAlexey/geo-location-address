<?php

namespace CodeblogPro\GeoLocationAddress\Tests;

use CodeblogPro\GeoCoordinates\Coordinates;
use CodeblogPro\GeoLocationAddress\Country;
use CodeblogPro\GeoLocationAddress\Region;

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

    public static function getValidRegion(): Region
    {
        return new Region(self::getValidRegionName(), self::getValidRegionCode());
    }

    public static function getValidCountryName(): string
    {
        return 'Czechia';
    }

    public static function getEmptyCountryName()
    {
        return null;
    }

    public static function getValidCountryCode(): string
    {
        return 'CZE';
    }

    public static function getValidCountry(): Country
    {
        return new Country(self::getValidCountryName(), self::getValidCountryCode());
    }

    public static function getValidCoordinates(): Coordinates
    {
        return new Coordinates(55.75, 37.61);
    }

    public static function getValidLocality(): string
    {
        return 'Velka Ohrada';
    }

    public static function getValidStreetName(): string
    {
        return 'Wall Street';
    }

    public static function getValidPostalCode(): string
    {
        return '10005';
    }
}
