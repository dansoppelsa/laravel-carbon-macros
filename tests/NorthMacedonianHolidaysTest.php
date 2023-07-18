<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class NorthMacedonianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideNorthMacedonianIndependenceDayData
     */
    public function test_it_knows_north_macedonian_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isNorthMacedonianHoliday());
    }

    public function provideNorthMacedonianIndependenceDayData(): array
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-01' => ['1900-01-01', false],
            '1920-09-08' => ['1920-09-08', true], // Independence Day
            '1950-01-01' => ['1950-01-01', false],
            '1980-04-24' => ['1980-04-24', false], // Day of the Cyrillic Alphabet
            '1982-09-08' => ['1982-09-08', true], // Independence Day
            '2010-01-01' => ['2010-01-01', false],
            '2011-09-08' => ['2011-09-08', true], // Independence Day
            '2013-09-08' => ['2013-09-08', true], // Independence Day
            '2014-09-08' => ['2014-09-08', true], // Independence Day
            '2021-01-01' => ['2021-01-01', false],
            '2021-09-08' => ['2021-09-08', true], // Independence Day
            '2050-09-08' => ['2050-09-08', true], // Independence Day
        ];
    }

    /**
     * @dataProvider provideNorthMacedonianRepublicDayData
     */
    public function test_it_knows_north_macedonian_republic_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isNorthMacedonianRepublicDay());
    }

    public function provideNorthMacedonianRepublicDayData(): array
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-01' => ['1900-01-01', false],
            '1920-09-08' => ['1920-09-08', false], // Independence Day
            '1950-01-01' => ['1950-01-01', false],
            '1980-04-24' => ['1980-04-24', false], // Day of the Cyrillic Alphabet
            '1982-09-08' => ['1982-09-08', false], // Independence Day
            '2010-01-01' => ['2010-01-01', false],
            '2011-09-08' => ['2011-09-08', false], // Independence Day
            '2013-09-08' => ['2013-09-08', false], // Independence Day
            '2014-09-08' => ['2014-09-08', false], // Independence Day
            '2021-01-01' => ['2021-01-01', false],
            '2021-09-08' => ['2021-09-08', false], // Independence Day
            '2050-09-08' => ['2050-09-08', false], // Independence Day
            '1900-08-02' => ['1900-08-02', true], // Republic Day
            '1900-10-11' => ['1900-10-11', false], // Day of People's Uprising
            '1920-08-02' => ['1920-08-02', true], // Republic Day
            '1950-08-02' => ['1950-08-02', true], // Republic Day
            '1980-08-02' => ['1980-08-02', true], // Republic Day
            '1982-08-02' => ['1982-08-02', true], // Republic Day
            '2010-08-02' => ['2010-08-02', true], // Republic Day
            '2011-08-02' => ['2011-08-02', true], // Republic Day
            '2013-08-02' => ['2013-08-02', true], // Republic Day
            '2014-08-02' => ['2014-08-02', true], // Republic Day
            '2021-08-02' => ['2021-08-02', true], // Republic Day
            '2050-08-02' => ['2050-08-02', true], // Republic Day
        ];
    }

    /**
     * @dataProvider provideNorthMacedonianDayOfPeoplesUprisingData
     */
    public function test_it_knows_north_macedonian_day_of_peoples_uprising($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isNorthMacedonianDayOfPeoplesUprising());
    }

    public function provideNorthMacedonianDayOfPeoplesUprisingData(): array
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-01' => ['1900-01-01', false],
            '1920-09-08' => ['1920-09-08', false], // Independence Day
            '1950-01-01' => ['1950-01-01', false],
            '1980-04-24' => ['1980-04-24', false], // Day of the Cyrillic Alphabet
            '1982-09-08' => ['1982-09-08', false], // Independence Day
            '2010-01-01' => ['2010-01-01', false],
            '2011-09-08' => ['2011-09-08', false], // Independence Day
            '2013-09-08' => ['2013-09-08', false], // Independence Day
            '2014-09-08' => ['2014-09-08', false], // Independence Day
            '2021-01-01' => ['2021-01-01', false],
            '2021-09-08' => ['2021-09-08', false], // Independence Day
            '2050-09-08' => ['2050-09-08', false], // Independence Day
            '1900-08-02' => ['1900-08-02', false], // Republic Day
            '1900-10-11' => ['1900-10-11', true], // Day of People's Uprising
            '1920-10-11' => ['1920-10-11', true], // Day of People's Uprising
            '1950-10-11' => ['1950-10-11', true], // Day of People's Uprising
            '1980-10-11' => ['1980-10-11', true], // Day of People's Uprising
            '1982-10-11' => ['1982-10-11', true], // Day of People's Uprising
            '2010-10-11' => ['2010-10-11', true], // Day of People's Uprising
            '2011-10-11' => ['2011-10-11', true], // Day of People's Uprising
            '2013-10-11' => ['2013-10-11', true], // Day of People's Uprising
            '2014-10-11' => ['2014-10-11', true], // Day of People's Uprising
            '2021-10-11' => ['2021-10-11', true], // Day of People's Uprising
            '2050-10-11' => ['2050-10-11', true], // Day of People's Uprising
        ];
    }

}