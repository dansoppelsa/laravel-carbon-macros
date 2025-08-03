<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class ItalianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideLiberationDayDate
     */
    public function test_it_recognizes_liberation_day($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isLiberationDay());
    }

    public function provideLiberationDayDate(){
        return [
            '1945-04-25' => ['1945-04-25', false],
            '2020-12-11' => ['2020-12-11', false],
            '2050-04-25' => ['2050-04-25', true],
            '2001-08-03' => ['2001-08-03', false],
            '1946-04-25' => ['1946-04-25', true],
            '1997-02-06' => ['1997-02-06', false]
        ];
    }

    /**
     * @dataProvider provideRepublicDayDate
     */
    public function test_it_recognizes_republic_day($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isRepublicDay());
    }

    public function provideRepublicDayDate(){
        return [
            '1945-06-02' => ['1945-06-02', false],
            '2020-11-30' => ['2020-11-30', false],
            '2050-08-25' => ['2050-08-25', false],
            '2005-09-03' => ['2005-09-03', false],
            '1946-06-02' => ['1946-06-02', true],
            '1900-06-02' => ['1900-06-02', false]
        ];
    }

    /**
     * @dataProvider provideImmaculateConceptionFeastDate
     */
    public function test_it_recognizes_immaculate_conception_feast($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isImmaculateConceptionFeast());
    }

    public function provideImmaculateConceptionFeastDate(){
        return [
            '1945-12-08' => ['1945-12-08', true],
            '1300-12-08' => ['1300-12-08', true],
            '2050-08-25' => ['2050-08-25', false],
            '2005-12-10' => ['2005-12-10', false],
            '2077-12-08' => ['2077-12-08', true],
            '1900-08-09' => ['1900-08-09', false]
        ];
    }

    /**
     * @dataProvider provideAssumptionOfMaryFeastDate
     */
    public function test_it_recognizes_is_assumption_of_mary_feast($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAssumptionOfMaryFeast());
    }

    public function provideAssumptionOfMaryFeastDate(){
        return [
            '1968-08-15' => ['1968-08-15', true],
            '2006-03-25' => ['2006-03-25', false],
            '2000-07-16' => ['2000-07-16', false],
            '1996-08-15' => ['1996-08-15', true],
            '1994-11-15' => ['1994-11-15', false],
            '2056-08-15' => ['2056-08-15', true]
        ];
    }

    /**
     * @dataProvider provideEpiphanyDate
     */
    public function test_it_recognizes_epiphany($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEpiphany());
    }

    public function provideEpiphanyDate(){
        return [
            '1999-06-01' => ['1999-06-01', false],
            '1996-07-12' => ['1996-07-12', false],
            '2007-01-06' => ['2007-01-06', true],
            '1997-08-09' => ['1997-08-09', false],
            '2008-01-06' => ['2008-01-06', true],
            '2011-05-11' => ['2011-05-11', false]
        ];
    }

    /**
     * @dataProvider provideSaintStephenDayDate
     */
    public function test_it_recognizes_saint_stephen_day($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSaintStephenDay());
    }

    public function provideSaintStephenDayDate(){
        return [
            '2015-08-23' => ['2015-08-23', false],
            '2065-12-26' => ['2065-12-26', true],
            '2015-05-29' => ['2015-05-29', false],
            '2019-02-26' => ['2019-02-26', false],
            '2077-12-25' => ['2077-12-25', false],
            '2022-09-11' => ['2022-09-11', false]
        ];
    }

    /**
     * @dataProvider provideSaintSylvesterDayDate
     */
    public function test_it_recognizes_saint_sylvester_day($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSaintSylvesterDay());
    }

    public function provideSaintSylvesterDayDate(){
        return [
            '2015-03-18' => ['2015-03-18', false],
            '2065-12-26' => ['2065-12-26', false],
            '2015-05-29' => ['2015-05-29', false],
            '2019-02-26' => ['2019-02-26', false],
            '2077-12-31' => ['2077-12-31', true],
            '2022-09-11' => ['2022-09-11', false]
        ];
    }

    /**
     * @dataProvider provideWorkersDayDate
     */
    public function test_it_recognizes_workers_day($date, $validity){
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isWorkersDay());
    }

    public function provideWorkersDayDate(){
        return [
            '1930-04-21' => ['1930-04-21', true],
            '1880-03-23' => ['1880-03-23', false],
            '2015-05-01' => ['2015-05-01', true],
            '2019-04-21' => ['2019-04-21', false],
            '1924-04-21' => ['1924-04-21', true],
            '1944-05-01' => ['1944-05-01', false]
        ];
    }

}
