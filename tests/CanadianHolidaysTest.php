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
    /**
     * @dataProvider provideLabourDayData
     */
    public function test_it_knows_labour_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isLabourDay());
    }

    public function provideLabourDayData()
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

    /**
     * @dataProvider provideCanadianThanksgivingData
     */
    public function test_it_knows_canadian_thanksgiving($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isCanadianThanksgiving());
    }

    public function provideCanadianThanksgivingData()
    {
        return [
            '1956-10-08' => ['1956-10-08', false],
            '1957-10-14' => ['1957-10-14', true],
            '2019-10-13' => ['2019-10-13', false],
            '2019-10-14' => ['2019-10-14', true],
            '2019-10-15' => ['2019-10-15', false],
            '2020-10-12' => ['2020-10-12', true],
            '2021-10-11' => ['2021-10-11', true],
            '2022-10-10' => ['2022-10-10', true],
        ];
    }
    /**
     * @dataProvider provideRemembranceDayData
     */
    public function test_it_knows_remembrance_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isRemembranceDay());
    }

    public function provideRemembranceDayData()
    {
        return [
            '1900-11-11' => ['1900-11-11', false],
            '1930-11-11' => ['1930-11-11', false],
            '1931-11-11' => ['1931-11-11', true],
            '1950-11-11' => ['1950-11-11', true],
            '2020-11-10' => ['2020-11-10', false],
            '2020-11-11' => ['2020-11-11', true],
            '2020-11-12' => ['2020-11-12', false],
            '2050-11-11' => ['2050-11-11', true],
        ];
    }

    /**
     * @dataProvider provideChristmasDayData
     */
    public function test_it_knows_christmas_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isChristmasDay());
    }

    public function provideChristmasDayData()
    {
        return [
            '1900-12-25' => ['1900-12-25', true],
            '1900-12-26' => ['1900-12-26', false],
            '1920-12-25' => ['1920-12-25', true],
            '1950-12-25' => ['1950-12-25', true],
            '1980-12-24' => ['1980-12-24', false],
            '1980-12-25' => ['1980-12-25', true],
            '1980-12-26' => ['1980-12-26', false],
            '2020-12-25' => ['2020-12-25', true],
            '2021-12-25' => ['2021-12-25', true],
            '2021-12-26' => ['2021-12-26', false],
            '2050-12-25' => ['2050-12-25', true],
        ];
    }

    /**
     * @dataProvider provideBoxingDayData
     */
    public function test_it_knows_boxing_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertEquals($validity, $date->isBoxingDay());
    }

    public function provideBoxingDayData()
    {
        return [
            '1950-12-26' => ['1950-12-26', true],
            '2020-12-26' => ['2020-12-26', true],
        ];
    }
}
