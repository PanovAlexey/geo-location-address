<?php

declare(strict_types=1);

namespace CodeblogPro\GeoLocationAddress;

use CodeblogPro\GeoLocationAddress\Exceptions\InvalidArgumentException;

class Region
{
    private string $name;
    private ?string $code = null;

    public function __construct(string $name = null, string $code = null)
    {
        if (null === $name) {
            throw new InvalidArgumentException('A region must have either a name.');
        }

        $this->name = $name;
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function __toString(): string
    {
        return $this->getName()
        . !empty($this->getCode())
            ? '(' . $this->getCode() . ')'
            : '';
    }
}
