<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class FrenchHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideAllSaintsDayData
     */
    public function test_it_recognizes_all_saints_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAllSaintsDay());
    }

    /**
     * @dataProvider provideAssumptionDayData
     */
    public function test_it_recognizes_assumption_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAssumptionDay());
    }

    /**
     * @dataProvider provideFirstWarArmisticeDayData
     */
    public function test_it_recognizes_first_war_armistice_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isFirstWarArmisticeDay());
    }

    /**
     * @dataProvider provideFrenchNationalDayData
     */
    public function test_it_recognizes_french_national_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isFrenchNationalDay());
    }

    /**
     * @return array[]
     */
    public function provideAllSaintsDayData()
    {
        return [
            '1982-11-01' => ['1982-11-01', true],
            '1982-01-01' => ['1982-01-01', false],
            '1982-11-02' => ['1982-11-02', false],
        ];
    }

    /**
     * @return array[]
     */
    public function provideAssumptionDayData()
    {
        return [
            '1982-08-15' => ['1982-08-15', true],
            '1982-08-16' => ['1982-08-16', false],
            '1982-07-15' => ['1982-07-15', false],
        ];
    }

    /**
     * @return array[]
     */
    public function provideFirstWarArmisticeDayData()
    {
        return [
            '1982-11-11' => ['1982-11-11', true],
            '1911-11-11' => ['1911-11-11', false],
            '1982-11-12' => ['1918-11-12', false],
            '1982-10-11' => ['1918-10-11', false],
        ];
    }

    /**
     * @return array[]
     */
    public function provideFrenchNationalDayData()
    {
        return [
            '1982-07-14' => ['1982-07-14', true],
            '1990-07-14' => ['1990-07-14', true],
            '1880-07-14' => ['1880-07-14', true],
            '1879-07-14' => ['1879-07-14', false],
            '1982-07-12' => ['1918-07-12', false],
            '1982-06-14' => ['1918-06-14', false],
        ];
    }
}
