<?php

namespace Icao24Utils\Tests;

use Icao24Utils\Icao24Utils;
use PHPUnit\Framework\TestCase;

final class Icao24UtilsTest extends TestCase
{
    /**
     * @testdox Method getCountry() returns a country code when an allocated address is provided.
     */
    public function testGetCountryWithAllocatedAddress(): void
    {
        self::assertEquals('FR', Icao24Utils::getCountry('395d66'));
    }

    /**
     * @testdox Method getCountry() returns null when a reserved address is provided.
     */
    public function testGetCountryWithReservedAddress(): void
    {
        self::assertNull(Icao24Utils::getCountry('51d8ca'));
    }

    /**
     * @testdox Method getCountry() returns null when an invalid address is provided.
     */
    public function testGetCountryWithInvalidAddress(): void
    {
        self::assertNull(Icao24Utils::getCountry('000000'));
    }

    /**
     * @testdox Method getCountry() throws when a malformed address is provided.
     */
    public function testGetCountryWithMalformedAddress(): void
    {
        self::expectException(\InvalidArgumentException::class);

        Icao24Utils::getCountry('foobar');
    }

    /**
     * @testdox Method isReserved() returns false when an allocated address is provided.
     */
    public function testIsReservedWithAllocatedAddress(): void
    {
        self::assertFalse(Icao24Utils::isReserved('395d66'));
    }

    /**
     * @testdox Method isReserved() returns true when a reserved address is provided.
     */
    public function testIsReservedWithReservedAddress(): void
    {
        self::assertTrue(Icao24Utils::isReserved('51d8ca'));
    }

    /**
     * @testdox Method isReserved() returns false when an invalid address is provided.
     */
    public function testIsReservedWithInvalidAddress(): void
    {
        self::assertFalse(Icao24Utils::isReserved('000000'));
    }

    /**
     * @testdox Method isReserved() throws when a malformed address is provided.
     */
    public function testIsReservedWithMalformedAddress(): void
    {
        self::expectException(\InvalidArgumentException::class);

        Icao24Utils::isReserved('foobar');
    }

    /**
     * @testdox Method isValid() returns true when an allocated address is provided.
     */
    public function testIsValidWithAllocatedAddress(): void
    {
        self::assertTrue(Icao24Utils::isValid('395d66'));
    }

    /**
     * @testdox Method isValid() returns true when a reserved address is provided.
     */
    public function testIsValidWithReservedAddress(): void
    {
        self::assertTrue(Icao24Utils::isValid('51d8ca'));
    }

    /**
     * @testdox Method isValid() returns false when an invalid address is provided.
     */
    public function testIsValidWithInvalidAddress(): void
    {
        self::assertFalse(Icao24Utils::isValid('000000'));
    }

    /**
     * @testdox Method isValid() throws when a malformed address is provided.
     */
    public function testIsValidWithMalformedAddress(): void
    {
        self::expectException(\InvalidArgumentException::class);

        Icao24Utils::isValid('foobar');
    }
}
