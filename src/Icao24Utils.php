<?php

declare(strict_types=1);

namespace Icao24Utils;

final class Icao24Utils
{
    /**
     * Returns the country of registration of an aircraft from its ICAO 24-bit address.
     *
     * @param string $icao24bitAddress An ICAO 24-bit address.
     *
     * @return string|null The country as an ISO 3166-1 alpha-2 code, or null if not found.
     *
     * @throws \InvalidArgumentException If a malformed ICAO 24-bit address is provided.
     */
    public static function getCountry(string $icao24bitAddress): ?string
    {
        if (!ctype_xdigit($icao24bitAddress)) {
            throw new \InvalidArgumentException(
                sprintf('The value "%s" is not a valid ICAO 24-bit address.', $icao24bitAddress)
            );
        }

        $icao24bitAddress = intval($icao24bitAddress, 16);

        return match (true) {
            $icao24bitAddress >= 0x004000 && $icao24bitAddress <= 0x0043ff => 'ZW',
            $icao24bitAddress >= 0x006000 && $icao24bitAddress <= 0x006fff => 'MZ',
            $icao24bitAddress >= 0x008000 && $icao24bitAddress <= 0x00ffff => 'ZA',
            $icao24bitAddress >= 0x010000 && $icao24bitAddress <= 0x017fff => 'EG',
            $icao24bitAddress >= 0x018000 && $icao24bitAddress <= 0x01ffff => 'LY',
            $icao24bitAddress >= 0x020000 && $icao24bitAddress <= 0x027fff => 'MA',
            $icao24bitAddress >= 0x028000 && $icao24bitAddress <= 0x02ffff => 'TN',
            $icao24bitAddress >= 0x030000 && $icao24bitAddress <= 0x0303ff => 'BW',
            $icao24bitAddress >= 0x032000 && $icao24bitAddress <= 0x032fff => 'BI',
            $icao24bitAddress >= 0x034000 && $icao24bitAddress <= 0x034fff => 'CM',
            $icao24bitAddress >= 0x035000 && $icao24bitAddress <= 0x0353ff => 'KM',
            $icao24bitAddress >= 0x036000 && $icao24bitAddress <= 0x036fff => 'CG',
            $icao24bitAddress >= 0x038000 && $icao24bitAddress <= 0x038fff => 'CI',
            $icao24bitAddress >= 0x03e000 && $icao24bitAddress <= 0x03efff => 'GA',
            $icao24bitAddress >= 0x040000 && $icao24bitAddress <= 0x040fff => 'ET',
            $icao24bitAddress >= 0x042000 && $icao24bitAddress <= 0x042fff => 'GQ',
            $icao24bitAddress >= 0x044000 && $icao24bitAddress <= 0x044fff => 'GH',
            $icao24bitAddress >= 0x046000 && $icao24bitAddress <= 0x046fff => 'GN',
            $icao24bitAddress >= 0x048000 && $icao24bitAddress <= 0x0483ff => 'GW',
            $icao24bitAddress >= 0x04a000 && $icao24bitAddress <= 0x04a3ff => 'LS',
            $icao24bitAddress >= 0x04c000 && $icao24bitAddress <= 0x04cfff => 'KE',
            $icao24bitAddress >= 0x050000 && $icao24bitAddress <= 0x050fff => 'LR',
            $icao24bitAddress >= 0x054000 && $icao24bitAddress <= 0x054fff => 'MG',
            $icao24bitAddress >= 0x058000 && $icao24bitAddress <= 0x058fff => 'MW',
            $icao24bitAddress >= 0x05a000 && $icao24bitAddress <= 0x05a3ff => 'MV',
            $icao24bitAddress >= 0x05c000 && $icao24bitAddress <= 0x05cfff => 'ML',
            $icao24bitAddress >= 0x05e000 && $icao24bitAddress <= 0x05e3ff => 'MR',
            $icao24bitAddress >= 0x060000 && $icao24bitAddress <= 0x0603ff => 'MU',
            $icao24bitAddress >= 0x062000 && $icao24bitAddress <= 0x062fff => 'NE',
            $icao24bitAddress >= 0x064000 && $icao24bitAddress <= 0x064fff => 'NG',
            $icao24bitAddress >= 0x068000 && $icao24bitAddress <= 0x068fff => 'UG',
            $icao24bitAddress >= 0x06a000 && $icao24bitAddress <= 0x06a3ff => 'QA',
            $icao24bitAddress >= 0x06c000 && $icao24bitAddress <= 0x06cfff => 'CF',
            $icao24bitAddress >= 0x06e000 && $icao24bitAddress <= 0x06efff => 'RW',
            $icao24bitAddress >= 0x070000 && $icao24bitAddress <= 0x070fff => 'SN',
            $icao24bitAddress >= 0x074000 && $icao24bitAddress <= 0x0743ff => 'SC',
            $icao24bitAddress >= 0x076000 && $icao24bitAddress <= 0x0763ff => 'SL',
            $icao24bitAddress >= 0x078000 && $icao24bitAddress <= 0x078fff => 'SO',
            $icao24bitAddress >= 0x07a000 && $icao24bitAddress <= 0x07a3ff => 'SZ',
            $icao24bitAddress >= 0x07c000 && $icao24bitAddress <= 0x07cfff => 'SD',
            $icao24bitAddress >= 0x080000 && $icao24bitAddress <= 0x080fff => 'TZ',
            $icao24bitAddress >= 0x084000 && $icao24bitAddress <= 0x084fff => 'TD',
            $icao24bitAddress >= 0x088000 && $icao24bitAddress <= 0x088fff => 'TG',
            $icao24bitAddress >= 0x08a000 && $icao24bitAddress <= 0x08afff => 'ZM',
            $icao24bitAddress >= 0x08c000 && $icao24bitAddress <= 0x08cfff => 'CD',
            $icao24bitAddress >= 0x090000 && $icao24bitAddress <= 0x090fff => 'AO',
            $icao24bitAddress >= 0x094000 && $icao24bitAddress <= 0x0943ff => 'BJ',
            $icao24bitAddress >= 0x096000 && $icao24bitAddress <= 0x0963ff => 'CV',
            $icao24bitAddress >= 0x098000 && $icao24bitAddress <= 0x0983ff => 'DJ',
            $icao24bitAddress >= 0x09a000 && $icao24bitAddress <= 0x09afff => 'GM',
            $icao24bitAddress >= 0x09c000 && $icao24bitAddress <= 0x09cfff => 'BF',
            $icao24bitAddress >= 0x09e000 && $icao24bitAddress <= 0x09e3ff => 'ST',
            $icao24bitAddress >= 0x0a0000 && $icao24bitAddress <= 0x0a7fff => 'DZ',
            $icao24bitAddress >= 0x0a8000 && $icao24bitAddress <= 0x0a8fff => 'BS',
            $icao24bitAddress >= 0x0aa000 && $icao24bitAddress <= 0x0aa3ff => 'BB',
            $icao24bitAddress >= 0x0ab000 && $icao24bitAddress <= 0x0ab3ff => 'BZ',
            $icao24bitAddress >= 0x0ac000 && $icao24bitAddress <= 0x0acfff => 'CO',
            $icao24bitAddress >= 0x0ae000 && $icao24bitAddress <= 0x0aefff => 'CR',
            $icao24bitAddress >= 0x0b0000 && $icao24bitAddress <= 0x0b0fff => 'CU',
            $icao24bitAddress >= 0x0b2000 && $icao24bitAddress <= 0x0b2fff => 'SV',
            $icao24bitAddress >= 0x0b4000 && $icao24bitAddress <= 0x0b4fff => 'GT',
            $icao24bitAddress >= 0x0b6000 && $icao24bitAddress <= 0x0b6fff => 'GY',
            $icao24bitAddress >= 0x0b8000 && $icao24bitAddress <= 0x0b8fff => 'HT',
            $icao24bitAddress >= 0x0ba000 && $icao24bitAddress <= 0x0bafff => 'HN',
            $icao24bitAddress >= 0x0bc000 && $icao24bitAddress <= 0x0bc3ff => 'VC',
            $icao24bitAddress >= 0x0be000 && $icao24bitAddress <= 0x0befff => 'JM',
            $icao24bitAddress >= 0x0c0000 && $icao24bitAddress <= 0x0c0fff => 'NI',
            $icao24bitAddress >= 0x0c2000 && $icao24bitAddress <= 0x0c2fff => 'PA',
            $icao24bitAddress >= 0x0c4000 && $icao24bitAddress <= 0x0c4fff => 'DM',
            $icao24bitAddress >= 0x0c6000 && $icao24bitAddress <= 0x0c6fff => 'TT',
            $icao24bitAddress >= 0x0c8000 && $icao24bitAddress <= 0x0c8fff => 'SR',
            $icao24bitAddress >= 0x0ca000 && $icao24bitAddress <= 0x0ca3ff => 'AG',
            $icao24bitAddress >= 0x0cc000 && $icao24bitAddress <= 0x0cc3ff => 'GD',
            $icao24bitAddress >= 0x0d0000 && $icao24bitAddress <= 0x0d7fff => 'MX',
            $icao24bitAddress >= 0x0d8000 && $icao24bitAddress <= 0x0dffff => 'VE',
            $icao24bitAddress >= 0x100000 && $icao24bitAddress <= 0x1fffff => 'RU',
            $icao24bitAddress >= 0x201000 && $icao24bitAddress <= 0x2013ff => 'NA',
            $icao24bitAddress >= 0x202000 && $icao24bitAddress <= 0x2023ff => 'ER',
            $icao24bitAddress >= 0x300000 && $icao24bitAddress <= 0x33ffff => 'IT',
            $icao24bitAddress >= 0x340000 && $icao24bitAddress <= 0x37ffff => 'ES',
            $icao24bitAddress >= 0x380000 && $icao24bitAddress <= 0x3bffff => 'FR',
            $icao24bitAddress >= 0x3c0000 && $icao24bitAddress <= 0x3fffff => 'DE',
            $icao24bitAddress >= 0x400000 && $icao24bitAddress <= 0x43ffff => 'GB',
            $icao24bitAddress >= 0x440000 && $icao24bitAddress <= 0x447fff => 'AT',
            $icao24bitAddress >= 0x448000 && $icao24bitAddress <= 0x44ffff => 'BE',
            $icao24bitAddress >= 0x450000 && $icao24bitAddress <= 0x457fff => 'BG',
            $icao24bitAddress >= 0x458000 && $icao24bitAddress <= 0x45ffff => 'DK',
            $icao24bitAddress >= 0x460000 && $icao24bitAddress <= 0x467fff => 'FI',
            $icao24bitAddress >= 0x468000 && $icao24bitAddress <= 0x46ffff => 'GR',
            $icao24bitAddress >= 0x470000 && $icao24bitAddress <= 0x477fff => 'HU',
            $icao24bitAddress >= 0x478000 && $icao24bitAddress <= 0x47ffff => 'NO',
            $icao24bitAddress >= 0x480000 && $icao24bitAddress <= 0x487fff => 'NL',
            $icao24bitAddress >= 0x488000 && $icao24bitAddress <= 0x48ffff => 'PL',
            $icao24bitAddress >= 0x490000 && $icao24bitAddress <= 0x497fff => 'PT',
            $icao24bitAddress >= 0x498000 && $icao24bitAddress <= 0x49ffff => 'CZ',
            $icao24bitAddress >= 0x4a8000 && $icao24bitAddress <= 0x4affff => 'SE',
            $icao24bitAddress >= 0x4b0000 && $icao24bitAddress <= 0x4b7fff => 'CH',
            $icao24bitAddress >= 0x4b8000 && $icao24bitAddress <= 0x4bffff => 'TR',
            $icao24bitAddress >= 0x4c8000 && $icao24bitAddress <= 0x4c83ff => 'CY',
            $icao24bitAddress >= 0x4ca000 && $icao24bitAddress <= 0x4cafff => 'IE',
            $icao24bitAddress >= 0x4cc000 && $icao24bitAddress <= 0x4ccfff => 'IS',
            $icao24bitAddress >= 0x4d0000 && $icao24bitAddress <= 0x4d03ff => 'LU',
            $icao24bitAddress >= 0x4d2000 && $icao24bitAddress <= 0x4d23ff => 'MT',
            $icao24bitAddress >= 0x4d4000 && $icao24bitAddress <= 0x4d43ff => 'MC',
            $icao24bitAddress >= 0x500000 && $icao24bitAddress <= 0x5003ff => 'SM',
            $icao24bitAddress >= 0x501000 && $icao24bitAddress <= 0x5013ff => 'AL',
            $icao24bitAddress >= 0x501c00 && $icao24bitAddress <= 0x501fff => 'HR',
            $icao24bitAddress >= 0x502c00 && $icao24bitAddress <= 0x502fff => 'LV',
            $icao24bitAddress >= 0x503c00 && $icao24bitAddress <= 0x503fff => 'LT',
            $icao24bitAddress >= 0x504c00 && $icao24bitAddress <= 0x504fff => 'MD',
            $icao24bitAddress >= 0x505c00 && $icao24bitAddress <= 0x505fff => 'SK',
            $icao24bitAddress >= 0x506c00 && $icao24bitAddress <= 0x506fff => 'SI',
            $icao24bitAddress >= 0x507c00 && $icao24bitAddress <= 0x507fff => 'UZ',
            $icao24bitAddress >= 0x508000 && $icao24bitAddress <= 0x50ffff => 'UA',
            $icao24bitAddress >= 0x510000 && $icao24bitAddress <= 0x5103ff => 'BY',
            $icao24bitAddress >= 0x511000 && $icao24bitAddress <= 0x5113ff => 'EE',
            $icao24bitAddress >= 0x512000 && $icao24bitAddress <= 0x5123ff => 'MK',
            $icao24bitAddress >= 0x513000 && $icao24bitAddress <= 0x5133ff => 'BA',
            $icao24bitAddress >= 0x514000 && $icao24bitAddress <= 0x5143ff => 'GE',
            $icao24bitAddress >= 0x515000 && $icao24bitAddress <= 0x5153ff => 'TJ',
            $icao24bitAddress >= 0x600000 && $icao24bitAddress <= 0x6003ff => 'AM',
            $icao24bitAddress >= 0x600800 && $icao24bitAddress <= 0x600bff => 'AZ',
            $icao24bitAddress >= 0x601000 && $icao24bitAddress <= 0x6013ff => 'KG',
            $icao24bitAddress >= 0x601800 && $icao24bitAddress <= 0x601bff => 'TM',
            $icao24bitAddress >= 0x680000 && $icao24bitAddress <= 0x6803ff => 'BT',
            $icao24bitAddress >= 0x681000 && $icao24bitAddress <= 0x6813ff => 'FM',
            $icao24bitAddress >= 0x682000 && $icao24bitAddress <= 0x6823ff => 'MN',
            $icao24bitAddress >= 0x683000 && $icao24bitAddress <= 0x6833ff => 'KZ',
            $icao24bitAddress >= 0x684000 && $icao24bitAddress <= 0x6843ff => 'PW',
            $icao24bitAddress >= 0x700000 && $icao24bitAddress <= 0x700fff => 'AF',
            $icao24bitAddress >= 0x702000 && $icao24bitAddress <= 0x702fff => 'BD',
            $icao24bitAddress >= 0x704000 && $icao24bitAddress <= 0x704fff => 'MM',
            $icao24bitAddress >= 0x706000 && $icao24bitAddress <= 0x706fff => 'KW',
            $icao24bitAddress >= 0x708000 && $icao24bitAddress <= 0x708fff => 'LA',
            $icao24bitAddress >= 0x70a000 && $icao24bitAddress <= 0x70afff => 'NP',
            $icao24bitAddress >= 0x70c000 && $icao24bitAddress <= 0x70c3ff => 'OM',
            $icao24bitAddress >= 0x70e000 && $icao24bitAddress <= 0x70efff => 'KH',
            $icao24bitAddress >= 0x710000 && $icao24bitAddress <= 0x717fff => 'SA',
            $icao24bitAddress >= 0x718000 && $icao24bitAddress <= 0x71ffff => 'KR',
            $icao24bitAddress >= 0x720000 && $icao24bitAddress <= 0x727fff => 'KP',
            $icao24bitAddress >= 0x730000 && $icao24bitAddress <= 0x737fff => 'IR',
            $icao24bitAddress >= 0x738000 && $icao24bitAddress <= 0x73ffff => 'IL',
            $icao24bitAddress >= 0x740000 && $icao24bitAddress <= 0x747fff => 'JO',
            $icao24bitAddress >= 0x748000 && $icao24bitAddress <= 0x74ffff => 'LB',
            $icao24bitAddress >= 0x750000 && $icao24bitAddress <= 0x757fff => 'MY',
            $icao24bitAddress >= 0x758000 && $icao24bitAddress <= 0x75ffff => 'PH',
            $icao24bitAddress >= 0x760000 && $icao24bitAddress <= 0x767fff => 'PK',
            $icao24bitAddress >= 0x768000 && $icao24bitAddress <= 0x76ffff => 'SG',
            $icao24bitAddress >= 0x770000 && $icao24bitAddress <= 0x777fff => 'LK',
            $icao24bitAddress >= 0x778000 && $icao24bitAddress <= 0x77ffff => 'SY',
            $icao24bitAddress >= 0x780000 && $icao24bitAddress <= 0x7bffff => 'CN',
            $icao24bitAddress >= 0x7c0000 && $icao24bitAddress <= 0x7fffff => 'AU',
            $icao24bitAddress >= 0x800000 && $icao24bitAddress <= 0x83ffff => 'IN',
            $icao24bitAddress >= 0x840000 && $icao24bitAddress <= 0x87ffff => 'JP',
            $icao24bitAddress >= 0x880000 && $icao24bitAddress <= 0x887fff => 'TH',
            $icao24bitAddress >= 0x888000 && $icao24bitAddress <= 0x88ffff => 'VN',
            $icao24bitAddress >= 0x890000 && $icao24bitAddress <= 0x890fff => 'YE',
            $icao24bitAddress >= 0x894000 && $icao24bitAddress <= 0x894fff => 'BH',
            $icao24bitAddress >= 0x895000 && $icao24bitAddress <= 0x8953ff => 'BN',
            $icao24bitAddress >= 0x896000 && $icao24bitAddress <= 0x896fff => 'AE',
            $icao24bitAddress >= 0x897000 && $icao24bitAddress <= 0x8973ff => 'SB',
            $icao24bitAddress >= 0x898000 && $icao24bitAddress <= 0x898fff => 'PG',
            $icao24bitAddress >= 0x899000 && $icao24bitAddress <= 0x8993ff => 'TW',
            $icao24bitAddress >= 0x8a0000 && $icao24bitAddress <= 0x8a7fff => 'ID',
            $icao24bitAddress >= 0x900000 && $icao24bitAddress <= 0x9003ff => 'MH',
            $icao24bitAddress >= 0x901000 && $icao24bitAddress <= 0x9013ff => 'CK',
            $icao24bitAddress >= 0x902000 && $icao24bitAddress <= 0x9023ff => 'WS',
            $icao24bitAddress >= 0xa00000 && $icao24bitAddress <= 0xafffff => 'US',
            $icao24bitAddress >= 0xc00000 && $icao24bitAddress <= 0xc3ffff => 'CA',
            $icao24bitAddress >= 0xc80000 && $icao24bitAddress <= 0xc87fff => 'NZ',
            $icao24bitAddress >= 0xc88000 && $icao24bitAddress <= 0xc88fff => 'FJ',
            $icao24bitAddress >= 0xc8a000 && $icao24bitAddress <= 0xc8a3ff => 'NR',
            $icao24bitAddress >= 0xc8c000 && $icao24bitAddress <= 0xc8c3ff => 'LC',
            $icao24bitAddress >= 0xc8d000 && $icao24bitAddress <= 0xc8d3ff => 'TO',
            $icao24bitAddress >= 0xc8e000 && $icao24bitAddress <= 0xc8e3ff => 'KI',
            $icao24bitAddress >= 0xc90000 && $icao24bitAddress <= 0xc903ff => 'VU',
            $icao24bitAddress >= 0xe00000 && $icao24bitAddress <= 0xe3ffff => 'AR',
            $icao24bitAddress >= 0xe40000 && $icao24bitAddress <= 0xe7ffff => 'BR',
            $icao24bitAddress >= 0xe80000 && $icao24bitAddress <= 0xe80fff => 'CL',
            $icao24bitAddress >= 0xe84000 && $icao24bitAddress <= 0xe84fff => 'EC',
            $icao24bitAddress >= 0xe88000 && $icao24bitAddress <= 0xe88fff => 'PY',
            $icao24bitAddress >= 0xe8c000 && $icao24bitAddress <= 0xe8cfff => 'PE',
            $icao24bitAddress >= 0xe90000 && $icao24bitAddress <= 0xe90fff => 'UY',
            $icao24bitAddress >= 0xe94000 && $icao24bitAddress <= 0xe94fff => 'BO',
            default => null,
        };
    }

    /**
     * Return whether an ICAO 24-bit address belongs to a reserved range.
     *
     * @param string $icao24bitAddress An ICAO 24-bit address.
     *
     * @return bool True if the address belongs to a reserved range, false otherwise.
     *
     * @throws \InvalidArgumentException If a malformed ICAO 24-bit address is provided.
     */
    public static function isReserved(string $icao24bitAddress): bool
    {
        if (!ctype_xdigit($icao24bitAddress)) {
            throw new \InvalidArgumentException(
                sprintf('The value "%s" is not a valid ICAO 24-bit address.', $icao24bitAddress)
            );
        }

        $icao24bitAddress = intval($icao24bitAddress, 16);

        return match (true) {
            $icao24bitAddress >= 0x200000 && $icao24bitAddress <= 0x27ffff => true, // Reserved for future use (AFI region)
            $icao24bitAddress >= 0x280000 && $icao24bitAddress <= 0x2fffff => true, // Reserved for future use (SAM region)
            $icao24bitAddress >= 0x500000 && $icao24bitAddress <= 0x5fffff => true, // Reserved for future use (EUR & NAT regions)
            $icao24bitAddress >= 0x600000 && $icao24bitAddress <= 0x67ffff => true, // Reserved for future use (MID region)
            $icao24bitAddress >= 0x680000 && $icao24bitAddress <= 0x6fffff => true, // Reserved for future use (ASIA region)
            $icao24bitAddress >= 0x899000 && $icao24bitAddress <= 0x8993ff => true, // ICAO (Special use in the interest of flight safety)
            $icao24bitAddress >= 0x900000 && $icao24bitAddress <= 0x9fffff => true, // Reserved for future use (NAM & PAC regions)
            $icao24bitAddress >= 0xb00000 && $icao24bitAddress <= 0xbfffff => true, // Reserved for future use
            $icao24bitAddress >= 0xd00000 && $icao24bitAddress <= 0xdfffff => true, // Reserved for future use
            $icao24bitAddress >= 0xec0000 && $icao24bitAddress <= 0xefffff => true, // Reserved for future use (CAR region)
            $icao24bitAddress >= 0xf00000 && $icao24bitAddress <= 0xf07fff => true, // ICAO (Temporary assignment)
            $icao24bitAddress >= 0xf08000 && $icao24bitAddress <= 0xf08fff => true, // Reserved for future use
            $icao24bitAddress >= 0xf09000 && $icao24bitAddress <= 0xf093ff => true, // ICAO (Special use in the interest of flight safety)
            $icao24bitAddress >= 0xf09400 && $icao24bitAddress <= 0xffffff => true, // Reserved for future use
            default => false,
        };
    }

    /**
     * Return whether an ICAO 24-bit address is valid.
     *
     * @param string $icao24bitAddress An ICAO 24-bit address.
     *
     * @return bool True if the address is valid, false otherwise.
     *
     * @throws \InvalidArgumentException If a malformed ICAO 24-bit address is provided.
     */
    public static function isValid(string $icao24bitAddress): bool
    {
        return Icao24Utils::isReserved($icao24bitAddress) || !is_null(Icao24Utils::getCountry($icao24bitAddress));
    }
}
