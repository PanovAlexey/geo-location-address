<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress;

use CodeblogPro\GeoCoordinates\CoordinatesInterface;

interface LocationInterface
{
    public function getCountry(): Country;

    public function getRegion(): Region;

    public function getCity(): string;

    public function getPostal(): string;

    public function getCoordinates(): ?CoordinatesInterface;

    public function toArray(): array;
}
