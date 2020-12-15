<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class DutchHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideDutchNationalDayData
     */
    public function test_it_recognizes_dutch_national_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchNationalDay());
    }

    /**
     * @dataProvider provideDutchRemembranceDayData
     */
    public function test_it_recognizes_dutch_rememberance_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchRemembranceDay());
    }

    /**
     * @dataProvider provideDutchLiberationDayData
     */
    public function test_it_recognizes_dutch_liberation_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchLiberationDay());
    }

    /**
    /**
     * @dataProvider provideSaintNicholasData
     */
    public function test_it_recognizes_saint_nicholas($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSaintNicholas());
    }

    /**
     * @return array[]
     */
    public function provideDutchNationalDayData()
    {
        return [
            '1930-04-30' => ['1930-04-30', false],
            '1949-04-30' => ['1949-04-30', true],
            '2013-04-30' => ['2013-04-30', true],
            '2014-04-27' => ['2014-04-27', false],
            '2014-04-30' => ['2014-04-30', false],
            '2014-04-26' => ['2014-04-26', true],
            '2015-04-26' => ['2015-04-26', false],
            '2015-04-27' => ['2015-04-27', true],
        ];
    }

    /**
     * @return array[]
     */
    public function provideDutchRemembranceDayData()
    {
        return [
            '1944-05-04' => ['1944-05-04', false],
            '1946-05-04' => ['1946-05-04', true],
            '1960-05-04' => ['1960-05-04', true],
        ];
    }

    /**
     * @return array[]
     */
    public function provideDutchLiberationDayData()
    {
        return [
            '1944-05-05' => ['1944-05-05', false],
            '1946-05-05' => ['1946-05-05', true],
            '1960-05-05' => ['1960-05-05', true],
        ];
    }

    /**
     * @return array[]
     */
    public function provideSaintNicholasData()
    {
        return [
            '2012-12-04' => ['2012-12-04', false],
            '2012-12-05' => ['2012-12-05', true],
            '2012-12-06' => ['2012-12-06', false],
        ];
    }

}
