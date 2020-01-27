<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class CanadianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideNewYearsDayData
     */
    public function test_it_knows_new_years_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isNewYearsDay());
    }

    public function provideNewYearsDayData()
    {
        return [
            '1963-11-22' => ['1963-11-22', false],
            '1970-01-01' => ['1970-01-01', true],
            '1982-01-01' => ['1982-01-01', true],
            '1999-12-31' => ['1999-12-31', false],
            '2020-01-01' => ['2020-01-01', true],
            '2020-01-02' => ['2020-01-02', false],
            '2050-01-01' => ['2050-01-01', true],
            '2038-01-19' => ['2038-01-19', false],
        ];
    }

}
