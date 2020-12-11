<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class IndonesianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideIndonesiaIndependenceDayData
     */
    public function test_it_recognizes_indonesia_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesiaIndependenceDay());
    }

    public function provideIndonesiaIndependenceDayData()
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
     * @dataProvider provideIndonesiaLaborDayData
     */
    public function test_it_recognizes_indonesia_labor_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesiaLaborDay());
    }

    public function provideIndonesiaLaborDayData()
    {
        return [
            '1945-02-20' => ['1945-02-20', true],
            '1955-06-02' => ['1955-06-02', false],
            '1965-07-01' => ['1965-07-01', false],
            '1975-02-20' => ['1975-02-20', true],
            '1985-12-01' => ['1985-12-01', false],
            '1995-02-20' => ['1995-02-20', true],
            '2005-05-05' => ['2005-05-05', false],
            '2015-02-20' => ['2015-02-20', true],
            '2020-02-20' => ['2020-02-20', true],
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
     * @dataProvider provideIndonesiaEducationDayData
     */
    public function test_it_recognizes_indonesia_education_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesiaEducationDay());
    }

    public function provideIndonesiaEducationDayData()
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
     * @dataProvider provideIndonesiaCustomerDayData
     */
    public function test_it_recognizes_indonesia_customer_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndonesiaCustomerDay());
    }

    public function provideIndonesiaCustomerDayData()
    {
        return [
            '1990-09-04' => ['1990-09-04', true],
            '1995-06-02' => ['1995-06-02', false],
            '2000-09-04' => ['2000-09-04', true],
            '2015-02-20' => ['2015-02-20', false],
            '2020-09-04' => ['2020-09-04', true],
        ];
    }
}
