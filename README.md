# GeoLocationAddress package

[![Build Status](https://travis-ci.org/PanovAlexey/geo-location-address.svg?branch=master)](https://travis-ci.org/PanovAlexey/geo-location-address) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PanovAlexey/geo-location-address/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/PanovAlexey/geo-location-address/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/PanovAlexey/geo-location-address/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/PanovAlexey/geo-location-address/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/PanovAlexey/geo-location-address/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Total Downloads](https://poser.pugx.org/codeblog.pro/geo-location-address/downloads)](https://packagist.org/packages/codeblog.pro/geo-location-address)
[![Version](https://poser.pugx.org/codeblog.pro/geo-location-address/version)](https://packagist.org/packages/codeblog.pro/geo-location-address)

The package provides an entity of geographic location address.
It can be used both independently and as part of other packages.

## Install

Via Composer

``` bash
$ composer require codeblog.pro/geo-location-address
```

## Usage

``` php
$location = new Location(
    new Coordinates(55.75, 37.61),
    new Country('Czechia', 'CZE'),
    new Region('New Jersey', 'US-NJ'),
    'Velka Ohrada',
    'Wall Street',
    '10005'
);

echo $location->getAddressString();
echo $location->toArray();

```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email panov@codeblog.pro instead of using the issue tracker.

## Credits

- [Panov Alexey](https://www.linkedin.com/in/codeblog/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
