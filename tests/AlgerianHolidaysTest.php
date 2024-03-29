<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class AlgerianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideAlgerianIndependenceDay
     */
    public function test_it_recognizes_algerian_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAlgerianIndependenceDay());
    }

    public function provideAlgerianIndependenceDay()
    {
        return [
            '1962-07-05' => ['1962-07-05', true],
            '1962-07-06' => ['1962-07-06', false],
            '1972-07-05' => ['1972-07-05', true],
            '1961-07-05' => ['1961-07-05', false],
            '1958-07-05' => ['1958-07-05', false],
            '2010-07-05' => ['2010-07-05', true],
            '1962-10-05' => ['1962-10-05', false],
            '1948-08-15' => ['1948-08-15', false],
            '2022-07-05' => ['2022-07-05', true],
        ];
    }

    /**
     * @dataProvider provideAlgerianRevolutionDay
     */
    public function test_it_recognizes_algerian_revolution_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAlgerianRevolutionDay());
    }

    public function provideAlgerianRevolutionDay()
    {
        return [
            '1954-11-01' => ['1954-11-01', true],
            '1954-12-01' => ['1954-12-01', false],
            '1950-11-01' => ['1950-11-01', false],
            '1961-07-05' => ['1961-07-05', false],
            '2010-11-01' => ['2010-11-01', true],
            '1954-09-17' => ['1954-09-17', false],
            '1948-08-15' => ['1948-08-15', false],
            '2022-11-01' => ['2022-11-01', true],
        ];
    }

    /**
     * @dataProvider provideAmazighNewYear
     */
    public function test_it_recognizes_amazigh_new_year($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAmazighNewYear());
    }

    public function provideAmazighNewYear()
    {
        return [
            '1976-01-12' => ['1976-01-12', true],
            '1960-01-20' => ['1960-01-20', false],
            '1999-12-20' => ['1999-12-20', false],
            '2010-07-16' => ['2010-07-16', false],
            '2010-03-08' => ['2010-03-08', false],
            '1999-01-12' => ['1999-01-12', true],
            '2012-01-12' => ['2012-01-12', true],
            '2020-01-12' => ['2020-01-12', true],
        ];
    }

    /**
     * @dataProvider provideAlgerianLaborDay
     */
    public function test_it_recognizes_algerian_labor_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAlgerianLaborDay());
    }

    public function provideAlgerianLaborDay()
    {
        return [
            '1994-03-16' => ['1994-03-16', false],
            '1894-09-03' => ['1894-09-03', false],
            '1894-05-01' => ['1894-05-01', true],
            '2015-09-07' => ['2015-09-07', false],
            '2015-05-01' => ['2015-05-01', true],
            '2016-09-05' => ['2016-09-05', false],
            '2017-05-01' => ['2017-05-01', true],
        ];
    }

}
