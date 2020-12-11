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
}
