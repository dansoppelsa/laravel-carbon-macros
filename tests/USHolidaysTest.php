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

    /**
     * @dataProvider provideMemorialDayData
     */
    public function test_it_knows_memorial_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isMemorialDay());
    }

    public function provideMemorialDayData()
    {
        return [
            '1873-05-26' => ['1873-05-26', false],
            '1874-05-25' => ['1874-05-25', true],
            '2019-05-27' => ['2019-05-27', true],
            '2020-05-24' => ['2020-05-24', false],
            '2020-05-25' => ['2020-05-25', true],
            '2020-05-26' => ['2020-05-26', false],
            '2021-05-31' => ['2021-05-31', true],
            '2022-05-30' => ['2022-05-30', true],
            '2050-05-29' => ['2050-05-29', false],
            '2050-05-30' => ['2050-05-30', true],
        ];
    }

    /**
     * @dataProvider provideLaborDayData
     */
    public function test_it_knows_labor_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isLaborDay());
    }

    public function provideLaborDayData()
    {
        return [
            '1893-09-04' => ['1893-09-04', false],
            '1894-09-03' => ['1894-09-03', true],
            '2015-09-07' => ['2015-09-07', true],
            '2016-09-05' => ['2016-09-05', true],
            '2020-09-06' => ['2020-09-06', false],
            '2020-09-07' => ['2020-09-07', true],
            '2020-09-08' => ['2020-09-08', false],
            '2025-09-01' => ['2025-09-01', true],
            '2025-09-02' => ['2025-09-02', false],
        ];
    }
}
