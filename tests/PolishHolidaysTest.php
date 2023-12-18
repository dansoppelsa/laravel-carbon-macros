<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class PolishHolidaysTest extends TestCase
{

    /**
     * @dataProvider providePolishIndependenceDayData
     */
    public function test_it_knows_polish_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishIndependenceDay());
    }

    public function providePolishIndependenceDayData()
    {
        return [
            '1980-11-11' => ['1980-11-11', false],
            '2019-11-11' => ['2019-11-11', true],
            '2019-08-05' => ['2019-08-05', false],
            '2010-03-06' => ['2010-03-06', false],
            '2022-11-11' => ['2022-11-11', true],
            '1991-11-11' => ['1991-11-11', true],
            '2050-08-01' => ['2050-08-01', false],
            '2050-11-11' => ['2050-11-11', true],
        ];
    }

    /**
     * @dataProvider providePolishConstitutionDayData
     */
    public function test_it_knows_polish_constitution_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishConstitutionDay());
    }

    public function providePolishConstitutionDayData()
    {
        return [
            '1979-05-03' => ['1979-05-03', false],
            '2019-05-03' => ['2019-05-03', true],
            '2019-08-05' => ['2019-08-05', false],
            '1991-06-06' => ['1991-06-06', false],
            '2022-05-03' => ['2022-05-03', true],
            '1996-06-28' => ['1996-06-28', false],
            '2050-12-01' => ['2050-12-01', false],
            '2050-05-03' => ['2050-05-03', true],
        ];
    }

    /**
     * @dataProvider providePolishLabourDayData
     */
    public function test_it_knows_polish_labour_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishLabourDay());
    }

    public function providePolishLabourDayData()
    {
        return [
            '1986-05-01' => ['1986-05-01', true],
            '2019-05-01' => ['2019-05-01', true],
            '2019-10-05' => ['2019-10-05', false],
            '2010-12-01' => ['2010-12-01', false],
            '2022-05-01' => ['2022-05-01', true],
            '1992-05-01' => ['1992-05-01', true],
            '2050-08-01' => ['2050-08-01', false],
            '2050-05-01' => ['2050-05-01', true],
        ];
    }

    /**
     * @dataProvider provideEpiphanyData
     */
    public function test_it_knows_epiphany($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEpiphanyinPoland());
    }

    public function provideEpiphanyData()
    {
        return [
            '1986-08-15' => ['1986-01-06', false],
            '2019-01-06' => ['2019-01-06', true],
            '2019-10-05' => ['2019-10-05', false],
            '2010-12-01' => ['2010-12-01', false],
            '2022-01-06' => ['2022-01-06', true],
            '1992-01-06' => ['1992-01-06', false],
            '2050-08-01' => ['2050-08-01', false],
            '2050-01-06' => ['2050-01-06', true],
        ];
    }

     /**
     * @dataProvider providePolishArmedForcesDay
     */
    public function test_it_knows_polish_armed_forces_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishArmedForcesDay());
    }

    public function providePolishArmedForcesDay()
    {
        return [
            '1986-08-15' => ['1986-08-15', false],
            '2019-08-15' => ['2019-08-15', true],
            '2019-10-05' => ['2019-10-05', false],
            '2010-12-01' => ['2010-12-01', false],
            '2022-08-15' => ['2022-08-15', true],
            '1992-08-15' => ['1992-08-15', true],
            '2050-08-01' => ['2050-08-01', false],
            '2050-08-15' => ['2050-08-15', true],
        ];
    }

}
