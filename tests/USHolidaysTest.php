<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class USHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideMlkJrDayData
     */
    public function test_it_knows_mlk_jr_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isMlkJrDay());
    }

    public function provideMlkJrDayData()
    {
        return [
            '1950-01-16' => ['1950-01-16', false],
            '2020-01-19' => ['2020-01-19', false],
            '2020-01-20' => ['2020-01-20', true],
            '2020-01-21' => ['2020-01-21', false],
            '2025-01-19' => ['2025-01-19', false],
            '2025-01-20' => ['2025-01-20', true],
            '2025-01-21' => ['2025-01-21', false],
        ];
    }

    /**
     * @dataProvider provideIndependenceDayData
     */
    public function test_it_knows_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isIndependenceDay());
    }

    public function provideIndependenceDayData()
    {
        return [
            '1780-07-04' => ['1780-07-04', false],
            '1781-07-04' => ['1781-07-04', true],
            '1950-07-04' => ['1950-07-04', true],
            '2020-07-03' => ['2020-07-03', false],
            '2020-07-04' => ['2020-07-04', true],
            '2020-07-05' => ['2020-07-05', false],
            '2050-07-04' => ['2050-07-04', true],
        ];
    }
}
