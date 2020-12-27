<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class ZambianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideZambianIndependenceDayData
     */
    public function test_it_recognizes_zambian_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianIndependenceDay());
    }

    public function provideZambianIndependenceDayData()
    {
        return [
            '1963-10-24' => ['1964-10-24', true],
            '1963-10-23' => ['1964-10-23', false],
            '2020-01-19' => ['2020-01-19', false],
            '2022-10-24' => ['2022-10-24', true],
            '1800-02-18' => ['1800-02-18', false],
        ];
    }
    /**
     * @dataProvider provideZambianLabourDayData
     */
    public function test_it_recognizes_zambian_labour_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianLabourDay());
    }

    public function provideZambianLabourDayData()
    {
        return [
            '1963-05-01' => ['1963-05-01', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-05-01' => ['2020-05-01', true],
            '2010-05-01' => ['2010-05-01', true],
        ];
    }
    /**
     * @dataProvider provideZambianWomensDayData
     */
    public function test_it_recognizes_zambian_womens_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianWomensDay());
    }

    public function provideZambianWomensDayData()
    {
        return [
            '1997-03-08' => ['1997-03-08', false],
            '2020-03-08' => ['2020-03-08', false],
            '2019-12-08' => ['2019-12-08', false],
            '2020-03-09' => ['2020-03-09', true],
            '2021-03-08' => ['2021-03-08', true],
        ];
    }
    /**
     * @dataProvider provideZambianYouthDayData
     */
    public function test_it_recognizes_zambian_youth_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianYouthDay());
    }

    public function provideZambianYouthDayData()
    {
        return [
            '1963-03-12' => ['1963-03-12', false],
            '1993-12-11' => ['1993-12-11', false],
            '1966-03-12' => ['1966-03-12', true],
            '2002-03-12' => ['2002-03-12', true],
            '2025-03-12' => ['2025-03-12', true],
        ];
    }
    /**
     * @dataProvider provideZambianAfricanUnityDayData
     */
    public function test_it_recognizes_zambian_african_unity_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianAfricanUnityDay());
    }

    public function provideZambianAfricanUnityDayData()
    {
        return [
            '1963-03-12' => ['1963-03-12', false],
            '1993-12-11' => ['1993-12-11', false],
            '1966-05-25' => ['1966-05-25', true],
            '2002-05-25' => ['2002-05-25', true],
            '2025-05-25' => ['2025-05-25', true],
        ];
    }
    /**
     * @dataProvider provideZambianAfricaDayData
     */
    public function test_it_recognizes_zambian_africa_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianAfricaDay());
    }

    public function provideZambianAfricaDayData()
    {
        return [
            '1963-03-12' => ['1963-03-12', false],
            '1993-12-11' => ['1993-12-11', false],
            '1966-05-25' => ['1966-05-25', true],
            '2002-05-25' => ['2002-05-25', true],
            '2025-05-25' => ['2025-05-25', true],
        ];
    }
    /**
     * @dataProvider provideZambianHeroesDayData
     */
    public function test_it_recognizes_zambian_heroes_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianHeroesDay());
    }

    public function provideZambianHeroesDayData()
    {
        return [
            '1963-07-01' => ['1963-07-01', false],
            '1993-03-11' => ['1993-03-11', false],
            '1966-07-04' => ['1966-07-04', true],
            '2002-07-01' => ['2002-07-01', true],
            '2025-07-07' => ['2025-07-07', true],
        ];
    }
    /**
     * @dataProvider provideZambianUnityDayData
     */
    public function test_it_recognizes_zambian_unity_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianUnityDay());
    }

    public function provideZambianUnityDayData()
    {
        return [
            '1963-01-02' => ['1963-01-02', false],
            '1993-07-12' => ['1993-07-12', false],
            '1966-07-05' => ['1966-07-05', true],
            '2002-07-02' => ['2002-07-02', true],
            '2025-07-08' => ['2025-07-08', true],
        ];
    }
    /**
     * @dataProvider provideZambianFarmersDayData
     */
    public function test_it_recognizes_zambian_farmers_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianFarmersDay());
    }

    public function provideZambianFarmersDayData()
    {
        return [
            '1963-08-02' => ['1963-08-02', false],
            '1993-12-12' => ['1993-12-12', false],
            '1966-08-01' => ['1966-08-01', true],
            '2002-08-05' => ['2002-08-05', true],
            '2025-08-04' => ['2025-08-04', true],
        ];
    }
    /**
     * @dataProvider provideZambianNationalPrayerDayData
     */
    public function test_it_recognizes_zambian_national_prayer_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isZambianNationalPrayerDay());
    }

    public function provideZambianNationalPrayerDayData()
    {
        return [
            '1963-10-02' => ['1963-10-02', false],
            '1993-03-12' => ['1993-03-12', false],
            '1966-10-18' => ['1966-10-18', false],
            '2018-10-18' => ['2018-10-18', true],
            '2025-10-18' => ['2025-10-18', true],
        ];
    }
}
