<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress\Tests\Unit;

use CodeblogPro\GeoLocationAddress\Exceptions\InvalidArgumentException;
use CodeblogPro\GeoLocationAddress\Country;
use CodeblogPro\GeoLocationAddress\Tests\BlanksAndMocksAndConstants;

class CountryTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithValidInputDataToCountryObjectCreated(): void
    {
        $country = new Country(
            BlanksAndMocksAndConstants::getValidCountryName(),
            BlanksAndMocksAndConstants::getValidCountryCode()
        );

        $this->assertInstanceOf(Country::class, $country);
    }

    public function testConstructWithNullCountryNameToExceptionReturned(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Country(
            BlanksAndMocksAndConstants::getEmptyCountryName(),
            BlanksAndMocksAndConstants::getValidCountryCode()
        );
    }
}
