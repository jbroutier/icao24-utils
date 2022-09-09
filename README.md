[![PHP](https://github.com/jbroutier/icao24-utils/actions/workflows/php.yml/badge.svg)](https://github.com/jbroutier/icao24-utils/actions/workflows/php.yml)
[![codecov](https://codecov.io/gh/jbroutier/icao24-utils/branch/main/graph/badge.svg?token=6G9R14FGBG)](https://codecov.io/gh/jbroutier/icao24-utils)
[![PHP version](https://img.shields.io/badge/php-8.0+-787cb5?logo=php)](https://github.com/jbroutier/icao24-utils)
[![License](https://img.shields.io/github/license/jbroutier/icao24-utils)](https://github.com/jbroutier/icao24-utils/blob/main/LICENSE)
[![Packagist](https://img.shields.io/packagist/v/jbroutier/icao24-utils)](https://packagist.org/packages/jbroutier/icao24-utils)

# ICAO24 utils

A set of PHP utility functions to work with aircraft ICAO 24-bit addresses.

Based on the ICAO Annex 10, Volume 3, Appendix to Chapter 9 « A worldwide scheme for the allocation, assignment and
application of aircraft addresses ».

## Examples

```php
<?php

use Icao24Utils\Icao24Utils;

/**
 * Retrieving the country of registration of an aircraft from its ICAO 24-bit address.
 */
Icao24Utils::getCountry('395d66';) // Returns 'FR' (Address belonging to an allocated block for France).
Icao24Utils::getCountry('51d8ca'); // Returns null (Address belonging to reserved block).
Icao24Utils::getCountry('000000'); // Returns null (Not a valid address).
Icao24Utils::getCountry('foobar'); // Throws an \InvalidArgumentException (Malformed address).

/**
 * Checking if an ICAO 24-bit address belongs to a reserved range.
 */
Icao24Utils::isReserved('395d66'); // Returns false (Address belonging to an allocated block for France).
Icao24Utils::isReserved('51d8ca'); // Returns true (Address belonging to reserved block).
Icao24Utils::isReserved('000000'); // Returns false (Not a valid address).
Icao24Utils::isReserved('foobar'); // Throws an \InvalidArgumentException (Malformed address).

/**
 * Checking if an ICAO 24-bit address is valid.
 */
Icao24Utils::isValid('395d66'); // Returns true (Address belonging to an allocated block for France).
Icao24Utils::isValid('51d8ca'); // Returns true (Address belonging to reserved block).
Icao24Utils::isValid('000000'); // Returns false (Not a valid address).
Icao24Utils::isValid('foobar'); // Throws an \InvalidArgumentException (Malformed address).
```
