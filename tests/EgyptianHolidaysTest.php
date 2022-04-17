<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class EgyptianHolidaysTest extends TestCase
{

    /**
     * @dataProvider provideEgyptianChristmasDayData
     */
    public function test_it_knows_egyptian_christmas_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptianChristmasDay());
    }

    public function provideEgyptianChristmasDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-12-26' => ['1900-12-26', false],
            '1920-01-07' => ['1920-01-07', true],
            '1950-12-25' => ['1950-12-25', false],
            '1980-12-24' => ['1980-12-24', false],
            '1980-12-25' => ['1980-12-25', false],
            '1980-12-26' => ['1980-12-26', false],
            '2014-01-07' => ['2014-01-07', true],
            '2021-01-01' => ['2021-01-01', false],
            '2021-01-08' => ['2021-01-08', false],
            '2050-01-07' => ['2050-01-07', true],
        ];
    }

    /**
     * @dataProvider provideEgyptianNationalPoliceDayData
     */
    public function test_it_knows_egyptian_national_police_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptianNationalPoliceDay());
    }

    public function provideEgyptianNationalPoliceDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-01-07' => ['1920-01-07', false],
            '1950-01-25' => ['1950-01-25', false],
            '1952-01-25' => ['1952-01-25', true],
            '1980-12-24' => ['1980-12-24', false],
            '1980-12-25' => ['1980-12-25', false],
            '2011-02-25' => ['2011-02-25', false],
            '2014-01-25' => ['2014-01-25', true],
            '2021-01-01' => ['2021-01-01', false],
            '2021-01-08' => ['2021-01-08', false],
            '2050-01-25' => ['2050-01-25', true],
        ];
    }

    /**
     * @dataProvider provideEgyptian2011RevolutionDayData
     */
    public function test_it_knows_egyptian_2011_revolution_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptian2011RevolutionDay());
    }

    public function provideEgyptian2011RevolutionDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-01-07' => ['1920-01-07', false],
            '1950-01-25' => ['1950-01-25', false],
            '1952-01-25' => ['1952-01-25', false],
            '1980-12-24' => ['1980-12-24', false],
            '1980-12-25' => ['1980-12-25', false],
            '2010-01-25' => ['2010-01-25', false],
            '2011-01-25' => ['2011-01-25', true],
            '2011-02-25' => ['2011-02-25', false],
            '2014-01-25' => ['2014-01-25', true],
            '2021-01-01' => ['2021-01-01', false],
            '2021-01-08' => ['2021-01-08', false],
            '2050-01-25' => ['2050-01-25', true],
        ];
    }

    /**
     * @dataProvider provideEgyptianSinaLiberationDayData
     */
    public function test_it_knows_egyptian_sina_liberation_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptianSinaLiberationDay());
    }

    public function provideEgyptianSinaLiberationDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-04-25' => ['1920-04-25', false],
            '1950-01-25' => ['1950-01-25', false],
            '1952-04-25' => ['1952-04-25', false],
            '1980-04-25' => ['1980-04-25', false],
            '1982-04-25' => ['1982-04-25', true],
            '2010-01-25' => ['2010-01-25', false],
            '2011-04-25' => ['2011-04-25', true],
            '2011-02-25' => ['2011-02-25', false],
            '2014-01-25' => ['2014-01-25', false],
            '2021-04-25' => ['2021-04-25', true],
            '2021-01-08' => ['2021-01-08', false],
            '2050-04-25' => ['2050-04-25', true],
        ];
    }

    /**
     * @dataProvider provideEgyptianLabourDayData
     */
    public function test_it_knows_egyptian_labour_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptianLabourDay());
    }

    public function provideEgyptianLabourDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-05-01' => ['1920-05-01', true],
            '1980-04-25' => ['1980-04-25', false],
            '1982-05-01' => ['1982-05-01', true],
            '2010-01-25' => ['2010-01-25', false],
            '2011-05-01' => ['2011-05-01', true],
            '2011-02-25' => ['2011-02-25', false],
            '2014-04-29' => ['2014-04-29', false],
            '2021-05-01' => ['2021-05-01', true],
            '2021-05-02' => ['2021-05-02', false],
            '2050-05-01' => ['2050-05-01', true],
        ];
    }


    /**
     * @dataProvider provideEgyptian30JuneRevolutionDayData
     */
    public function test_it_knows_egyptian_30_june_revolution_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptian30JuneRevolutionDay());
    }

    public function provideEgyptian30JuneRevolutionDayData()
    {
        return [
            '1900-06-30' => ['1900-06-30', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-06-30' => ['1920-06-30', false],
            '1980-04-25' => ['1980-04-25', false],
            '1982-06-30' => ['1982-06-30', false],
            '2010-01-25' => ['2010-01-25', false],
            '2011-06-30' => ['2011-06-30', false],
            '2013-06-30' => ['2013-06-30', true],
            '2014-06-30' => ['2014-06-30', true],
            '2021-05-02' => ['2021-05-02', false],
            '2050-06-30' => ['2050-06-30', true],
        ];
    }

    /**
     * @dataProvider provideEgyptian23JulyRevolutionDayData
     */
    public function test_it_knows_egyptian_23_july_revolution_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptian23JulyRevolutionDay());
    }

    public function provideEgyptian23JulyRevolutionDayData()
    {
        return [
            '1900-07-23' => ['1900-07-23', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-07-23' => ['1920-07-23', false],
            '1952-07-23' => ['1952-07-23', true],
            '1980-04-25' => ['1980-04-25', false],
            '1982-07-23' => ['1982-07-23', true],
            '2010-01-25' => ['2010-01-25', false],
            '2011-07-23' => ['2011-07-23', true],
            '2013-07-23' => ['2013-07-23', true],
            '2014-07-23' => ['2014-07-23', true],
            '2021-05-02' => ['2021-05-02', false],
            '2050-07-23' => ['2050-07-23', true],
        ];
    }


    /**
     * @dataProvider provideEgyptian6OctoberVictoryDayData
     */
    public function test_it_knows_egyptian_6_october_victory_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEgyptian6OctoberVictoryDay());
    }

    public function provideEgyptian6OctoberVictoryDayData()
    {
        return [
            '1900-10-06' => ['1900-10-06', false],
            '1900-01-25' => ['1900-01-25', false],
            '1920-10-06' => ['1920-10-06', false],
            '1952-10-06' => ['1952-10-06', false],
            '1973-10-06' => ['1973-10-06', true],
            '1982-10-06' => ['1982-10-06', true],
            '2010-01-25' => ['2010-01-25', false],
            '2011-10-06' => ['2011-10-06', true],
            '2013-10-06' => ['2013-10-06', true],
            '2014-10-06' => ['2014-10-06', true],
            '2021-05-02' => ['2021-05-02', false],
            '2050-10-06' => ['2050-10-06', true],
        ];
    }
}
