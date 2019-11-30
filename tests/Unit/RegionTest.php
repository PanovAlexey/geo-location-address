<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress\Tests\Unit;

use CodeblogPro\GeoLocationAddress\Exceptions\InvalidArgumentException;
use CodeblogPro\GeoLocationAddress\Region;
use CodeblogPro\GeoLocationAddress\Tests\BlanksAndMocksAndConstants;

class RegionTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithValidInputDataToRegionObjectCreated(): void
    {
        $region = new Region(
            BlanksAndMocksAndConstants::getValidRegionName(),
            BlanksAndMocksAndConstants::getValidRegionCode()
        );

        $this->assertInstanceOf(Region::class, $region);
    }

    public function testConstructWithNullRegionNameToExceptionReturned(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Region(
            BlanksAndMocksAndConstants::getEmptyRegionName(),
            BlanksAndMocksAndConstants::getValidRegionCode()
        );
    }
}
