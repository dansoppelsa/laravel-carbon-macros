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
}
