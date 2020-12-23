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
     * @dataProvider provideAscensionDayData
     */
    public function test_it_recognizes_ascension_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAscensionDay());
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
     * @dataProvider provideEasterMondayDayData
     */
    public function test_it_recognizes_easter_monday_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEasterMonday());
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
     * @dataProvider providePentecostDayData
     */
    public function test_it_recognizes_pentecost_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPentecostDay());
    }

    /**
     * @dataProvider provideSecondWarArmisticeDayData
     */
    public function test_it_recognizes_second_war_armistice_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSecondWarArmisticeDay());
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
    public function provideAscensionDayData()
    {
        return [
            '2019-05-30' => ['2019-05-30', true],
            '2019-05-29' => ['2919-05-20', false],
            '2019-05-31' => ['2019-05-31', false],
            '2020-05-21' => ['2020-05-21', true],
            '2020-05-20' => ['2020-05-20', false],
            '2020-05-22' => ['2020-05-22', false],
        ];
    }

    /**
     * @return array[]
     */
    public function provideEasterMondayDayData()
    {
        return [
            '2019-04-22' => ['2019-04-22', true],
            '2019-04-21' => ['2019-04-21', false],
            '2019-04-23' => ['2019-04-23', false],
            '2020-04-13' => ['2020-04-13', true],
            '2020-04-12' => ['2020-04-12', false],
            '2020-04-14' => ['2020-04-14', false],
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

    /**
     * @return array[]
     */
    public function providePentecostDayData()
    {
        return [
            '2019-06-09' => ['2019-06-09', true],
            '2019-06-08' => ['2019-06-08', false],
            '2019-06-10' => ['2019-06-10', false],
            '2020-05-31' => ['2020-05-31', true],
            '2020-05-30' => ['2020-05-30', false],
            '2020-06-01' => ['2020-06-01', false],
        ];
    }

    /**
     * @return array[]
     */
    public function provideSecondWarArmisticeDayData()
    {
        return [
            '1982-05-08' => ['1982-05-08', true],
            '1911-05-08' => ['1911-05-08', false],
            '1982-05-07' => ['1918-05-07', false],
            '1982-05-09' => ['1918-05-09', false],
        ];
    }
}
