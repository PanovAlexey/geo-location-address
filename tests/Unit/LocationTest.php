<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress\Tests\Unit;

use CodeblogPro\GeoLocationAddress\Location;
use CodeblogPro\GeoLocationAddress\Tests\BlanksAndMocksAndConstants;

class LocationTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithValidInputDataToLocationObjectCreated(): void
    {
        $coordinates = BlanksAndMocksAndConstants::getValidCoordinates();
        $country = BlanksAndMocksAndConstants::getValidCountry();
        $region = BlanksAndMocksAndConstants::getValidRegion();

        $location = new Location(
            $coordinates,
            $country,
            $region,
            BlanksAndMocksAndConstants::getValidLocality(),
            BlanksAndMocksAndConstants::getValidStreetName(),
            BlanksAndMocksAndConstants::getValidPostalCode(),
        );

        $this->assertInstanceOf(Location::class, $location);
    }
}
