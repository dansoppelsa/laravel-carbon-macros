<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class CanadianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideFamilyDayData
     */
    public function test_it_knows_family_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isFamilyDay());
    }

    public function provideFamilyDayData()
    {
        return [
            '1989-02-20' => ['1989-02-20', false],
            '1990-02-19' => ['1990-02-19', true],
            '2007-02-19' => ['1990-02-19', true],
            '2020-02-16' => ['2020-02-16', false],
            '2020-02-17' => ['2020-02-17', true],
            '2020-02-18' => ['2020-02-18', false],
            '2050-02-18' => ['2020-02-18', false],
        ];
    }

    /**
     * @dataProvider provideVictoriaDayData
     */
    public function test_it_knows_victoria_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isVictoriaDay());
    }

    public function provideVictoriaDayData()
    {
        return [
            '2018-05-20' => ['2018-05-20', false],
            '2018-05-21' => ['2018-05-21', true],
            '2018-05-22' => ['2018-05-22', false],
            '2019-05-19' => ['2019-05-19', false],
            '2019-05-20' => ['2019-05-20', true],
            '2019-05-21' => ['2019-05-21', false],
            '2020-05-17' => ['2020-05-17', false],
            '2020-05-18' => ['2020-05-18', true],
            '2020-05-19' => ['2020-05-19', false],
            '2021-05-23' => ['2021-05-23', false],
            '2021-05-24' => ['2021-05-24', true],
            '2021-05-25' => ['2021-05-25', false],
        ];
    }

    /**
     * @dataProvider provideCanadaDayData
     */
    public function test_it_knows_canada_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isCanadaDay());
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

        $this->assertSame($validity, $date->isLabourDay());
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

        $this->assertSame($validity, $date->isCanadianThanksgiving());
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

        $this->assertSame($validity, $date->isRemembranceDay());
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
     * @dataProvider provideBoxingDayData
     */
    public function test_it_knows_boxing_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBoxingDay());
    }

    public function provideBoxingDayData()
    {
        return [
            '1950-12-26' => ['1950-12-26', true],
            '1950-12-27' => ['1950-12-27', false],
            '2020-12-26' => ['2020-12-26', true],
            '2050-12-25' => ['2050-12-25', false],
            '2050-12-26' => ['2050-12-26', true],
        ];
    }

    /**
     * @dataProvider provideCivicHolidayData
     */
    public function test_it_knows_the_canadian_civic_holiday($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isCivicHoliday());
    }

    public function provideCivicHolidayData()
    {
        return [
            '1970-08-03' => ['1970-08-03', true],
            '1970-08-04' => ['1970-08-04', false],
            '2019-08-04' => ['2019-08-04', false],
            '2019-08-05' => ['2019-08-05', true],
            '2019-08-06' => ['2019-08-06', false],
            '2022-08-01' => ['2022-08-01', true],
            '2022-08-02' => ['2022-08-02', false],
            '2050-08-01' => ['2050-08-01', true],
            '2050-08-02' => ['2050-08-02', false],
        ];
    }
}
