<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class SwedishHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideSwedishMidsummerDayData
     */
    function test_it_knows_swedish_midsummer_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSwedishMidsummerDay());
    }

    function provideSwedishMidsummerDayData()
    {
        return [
            '1963-05-24' => ['1963-05-24', false],
            '1978-06-24' => ['1978-06-24', true],
            '1986-06-21' => ['1986-06-21', true],
            '1997-06-26' => ['1997-06-26', false],
            '2020-06-20' => ['2020-06-20', true],
            '2020-01-26' => ['2020-01-26', false],
            '2035-06-23' => ['2035-06-23', true],
            '2046-06-26' => ['2046-06-26', false],
        ];
    }

    /**
     * @dataProvider provideSwedishNationalDayData
     */
    function test_it_knows_swedish_national_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSwedishNationalDay());
    }

    function provideSwedishNationalDayData()
    {
        return [
            '1960-06-06' => ['1960-06-06', true],
            '1975-05-06' => ['1975-05-06', false],
            '1984-06-06' => ['1984-06-06', true],
            '1994-01-06' => ['1994-01-06', false],
            '2000-06-06' => ['2000-06-06', true],
            '2020-06-06' => ['2020-06-06', true],
            '2034-06-04' => ['2035-06-04', false],
            '2060-06-05' => ['2060-06-05', false],
        ];
    }

    /**
     * @dataProvider provideChristmasEveData
     */
    function test_it_knows_christmas_eve($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isChristmasEve());
    }

    function provideChristmasEveData()
    {
        return [
            '1963-12-24' => ['1963-12-24', true],
            '1972-12-25' => ['1972-12-25', false],
            '1987-12-24' => ['1987-12-24', true],
            '1993-12-24' => ['1993-12-24', true],
            '2004-12-23' => ['2004-12-23', false],
            '2020-12-24' => ['2020-12-24', true],
            '2020-01-24' => ['2020-01-24', false],
            '2037-12-24' => ['2037-12-24', true],
            '2057-12-25' => ['2057-12-25', false],
        ];
    }
}
