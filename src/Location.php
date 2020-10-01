<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress;

use CodeblogPro\GeoCoordinates\CoordinatesInterface;

class Location implements LocationInterface
{
    private ?CoordinatesInterface $coordinates;
    private ?Country $country;
    private ?Region $region;
    private string $streetName;
    private string $locality;
    private string $postalCode;

    public function __construct(
        CoordinatesInterface $coordinates = null,
        Country $country = null,
        Region $region = null,
        string $locality = '',
        string $streetName = '',
        string $postalCode = ''
    ) {
        $this->coordinates = $coordinates;
        $this->country = $country;
        $this->region = $region;
        $this->locality = $locality;
        $this->streetName = $streetName;
        $this->postalCode = $postalCode;
    }

    public function getCoordinates(): ?CoordinatesInterface
    {
        return $this->coordinates;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function getLocality(): string
    {
        return $this->locality;
    }

    public function getStreetName(): string
    {
        return $this->streetName;
    }

    public function getPostal(): string
    {
        return $this->postalCode;
    }

    public function getAddressString(): string
    {
        $address = '';

        if (!empty($this->getCountry())) {
            $address = $this->getCountry()->getName();
        }

        if (!empty($this->getRegion())) {
            $address .= ', ' . $this->getRegion()->getName();
        }

        if (!empty($this->getLocality())) {
            $address .= ', ' . $this->getLocality();
        }

        if (!empty($this->getStreetName())) {
            $address .= ', ' . $this->getStreetName();
        }

        return $address;
    }

    public function toArray(): array
    {
        return [
            'latitude' => (!empty($this->getCoordinates())) ? $this->getCoordinates()->getLatitude() : null,
            'longitude' => (!empty($this->getCoordinates())) ? $this->getCoordinates()->getLongitude() : null,
            'country_name' => $this->getCountry()->getName(),
            'country_code' => $this->getCountry()->getCode(),
            'region_name' => $this->getRegion()->getName(),
            'region_code' => $this->getRegion()->getCode(),
            'street_name' => $this->getStreetName(),
            'postal_code' => $this->getPostal(),
            'locality' => $this->getLocality()
        ];
    }
}
