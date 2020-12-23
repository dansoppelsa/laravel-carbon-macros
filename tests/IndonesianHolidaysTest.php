<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class IndonesianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideIndonesianIndependenceDayData
     */
    public function test_it_recognizes_indonesian_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesianIndependenceDay());
    }

    public function provideIndonesianIndependenceDayData()
    {
        return [
            '1945-08-17' => ['1945-08-17', true],
            '1955-09-17' => ['1955-09-17', false],
            '1965-01-10' => ['1965-01-10', false],
            '1975-08-17' => ['1975-08-17', true],
            '1985-04-17' => ['1985-04-17', false],
            '1995-08-17' => ['1995-08-17', true],
            '2005-12-17' => ['2005-12-17', false],
            '2015-08-17' => ['2015-08-17', true],
            '2020-08-17' => ['2020-08-17', true],
        ];
    }

    /**
     * @dataProvider providePancasilaDayData
     */
    public function test_it_recognizes_pancasila_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPancasilaDay());
    }

    public function providePancasilaDayData()
    {
        return [
            '1945-06-01' => ['1945-06-01', true],
            '1955-06-02' => ['1955-06-02', false],
            '1965-07-01' => ['1965-07-01', false],
            '1975-06-01' => ['1975-06-01', true],
            '1985-12-01' => ['1985-12-01', false],
            '1995-06-01' => ['1995-06-01', true],
            '2005-05-05' => ['2005-05-05', false],
            '2015-06-01' => ['2015-06-01', true],
            '2020-06-01' => ['2020-06-01', true],
        ];
    }

    /**
     * @dataProvider provideIndonesianLaborDayData
     */
    public function test_it_recognizes_indonesian_labor_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesianLaborDay());
    }

    public function provideIndonesianLaborDayData()
    {
        return [
            '1945-05-01' => ['1945-05-01', true],
            '1955-06-02' => ['1955-06-02', false],
            '1965-07-01' => ['1965-07-01', false],
            '1975-05-01' => ['1975-05-01', true],
            '1985-12-01' => ['1985-12-01', false],
            '1995-05-01' => ['1995-05-01', true],
            '2005-05-05' => ['2005-05-05', false],
            '2015-05-01' => ['2015-05-01', true],
            '2020-05-01' => ['2020-05-01', true],
        ];
    }

    /**
     * @dataProvider provideKartiniDayData
     */
    public function test_it_recognizes_kartini_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKartiniDay());
    }

    public function provideKartiniDayData()
    {
        return [
            '1990-04-21' => ['1990-04-21', true],
            '1995-06-02' => ['1995-06-02', false],
            '2000-04-21' => ['2000-04-21', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-04-21' => ['2020-04-21', true],
        ];
    }

    /**
     * @dataProvider provideIndonesianEducationDayData
     */
    public function test_it_recognizes_indonesian_education_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesianEducationDay());
    }

    public function provideIndonesianEducationDayData()
    {
        return [
            '1990-05-02' => ['1990-05-02', true],
            '1995-06-02' => ['1995-06-02', false],
            '2000-05-02' => ['2000-05-02', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-05-02' => ['2020-05-02', true],
        ];
    }

    /**
     * @dataProvider provideIndonesianCustomerDayData
     */
    public function test_it_recognizes_indonesian_customer_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesiaCustomerDay());
    }

    public function provideIndonesianCustomerDayData()
    {
        return [
            '1990-09-04' => ['1990-09-04', false],
            '1995-06-02' => ['1995-06-02', false],
            '2000-09-04' => ['2000-09-04', false],
            '2002-09-04' => ['2002-09-04', false],
            '2003-09-04' => ['2003-09-04', true],
            '2010-09-04' => ['2010-09-04', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-09-04' => ['2020-09-04', true],
        ];
    }

    /**
     * @dataProvider provideIndonesianHeroesDayData
     */
    public function test_it_recognizes_indonesian_heroes_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesianHeroesDay());
    }

    public function provideIndonesianHeroesDayData()
    {
        return [
            '1990-11-10' => ['1990-11-10', true],
            '1995-06-02' => ['1995-06-02', false],
            '2000-11-10' => ['2000-11-10', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-11-10' => ['2020-11-10', true],
        ];
    }

    /**
     * @dataProvider provideIndonesianMothersDayData
     */
    public function test_it_recognizes_indonesian_mothers_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesianMothersDay());
    }

    public function provideIndonesianMothersDayData()
    {
        return [
            '1990-12-22' => ['1990-12-22', true],
            '1995-06-02' => ['1995-06-02', false],
            '2000-12-22' => ['2000-12-22', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-12-22' => ['2020-12-22', true],
        ];
    }
}
