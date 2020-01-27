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

    /**
     * @dataProvider provideEasterSundayData
     */
    public function test_it_knows_easter_sunday($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isEasterSunday());
    }

    public function provideEasterSundayData()
    {
        return [
            '1905-04-23' => ['1905-04-23', true],
            '1970-03-28' => ['1970-03-28', false],
            '1970-03-28' => ['1970-03-28', false],
            '1970-03-29' => ['1970-03-29', true],
            '1970-03-30' => ['1970-03-30', false],
            '1990-04-14' => ['1990-04-14', false],
            '1990-04-15' => ['1990-04-15', true],
            '1990-04-16' => ['1990-04-16', false],
            '2020-04-12' => ['2020-04-12', true],
            '2020-04-13' => ['2020-04-13', false],
            '2050-04-10' => ['2050-04-10', true],
            '2050-04-11' => ['2050-04-11', false],
        ];
    }

    /**
     * @dataProvider provideGoodFridayData
     */
    public function test_it_knows_good_friday($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isGoodFriday());
    }

    public function provideGoodFridayData()
    {
        return [
            '1905-04-21' => ['1905-04-21', true],
            '1970-03-26' => ['1970-03-26', false],
            '1970-03-27' => ['1970-03-27', true],
            '1970-03-28' => ['1970-03-28', false],
            '1970-03-30' => ['1970-03-30', false],
            '1990-04-14' => ['1990-04-14', false],
            '1990-04-13' => ['1990-04-13', true],
            '1990-04-16' => ['1990-04-16', false],
            '2020-04-10' => ['2020-04-10', true],
            '2020-04-13' => ['2020-04-13', false],
            '2050-04-08' => ['2050-04-08', true],
            '2050-04-11' => ['2050-04-11', false],
        ];
    }
    /**
     * @dataProvider provideCanadaDayData
     */
    public function test_it_knows_canada_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isCanadaDay());
    }

    public function provideCanadaDayData()
    {
        return [
            '1970-06-30' => ['1970-06-30', false],
            '1970-07-01' => ['1970-07-01', true],
            '1970-07-02' => ['1970-07-02', false],
            '1982-06-30' => ['1982-06-30', false],
            '1982-07-01' => ['1982-07-01', true],
            '1982-07-02' => ['1982-07-02', false],
            '2015-07-01' => ['2015-07-01', true],
            '2018-07-01' => ['2018-07-01', true],
            '2020-07-01' => ['2020-07-01', true],
        ];
    }
}
