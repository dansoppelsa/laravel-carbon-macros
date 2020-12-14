<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class BrazilianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideKenyanIndependenceDayData
     */
    public function test_it_recognizes_kenyan_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanIndependenceDayData());
    }

    public function provideKenyanIndependenceDayData()
    {
        return [
            '1963-12-12' => ['1963-12-12', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-12-12' => ['2020-12-12', true],
            '1800-12-12' => ['1800-12-12', false],
        ];
    }

    /**
     * @dataProvider provideKenyanJamhuriDayData
     */
    public function test_it_recognizes_kenyan_jamhuri_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanJamhuriDayData());
    }

    public function provideKenyanJamhuriDayData()
    {
        return [
            '1963-12-12' => ['1963-12-12', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-12-12' => ['2020-12-12', true],
            '1800-12-12' => ['1800-12-12', false],
        ];
    }

    /**
     * @dataProvider provideKenyanLabourDayData
     */
    public function test_it_recognizes_kenyan_labour_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanLabourDayData());
    }

    public function provideKenyanLabourDayData()
    {
        return [
            '1963-05-01' => ['1963-05-01', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-05-01' => ['2020-05-01', true],
            '2010-05-01' => ['2010-05-01', true],
        ];
    }

    /**
     * @dataProvider provideKenyanMadarakaDayData
     */
    public function test_it_recognizes_kenyan_madaraka_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanMadarakaDayData());
    }

    public function provideKenyanMadarakaDayData()
    {
        return [
            '1963-06-01' => ['1963-06-01', true],
            '1920-06-01' => ['1920-06-01', true],
            '2020-06-01' => ['2020-06-01', true],
            '2020-05-01' => ['2020-05-01', false],
            '1920-05-01' => ['1920-05-01', false],
        ];
    }

    /**
     * @dataProvider provideKenyanHudumaDayData
     */
    public function test_it_recognizes_kenyan_huduma_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanHudumaDayData());
    }

    public function provideKenyanHudumaDayData()
    {
        return [
            '1963-10-10' => ['1963-10-10', true],
            '1920-10-09' => ['1920-10-09', false],
            '2020-10-10' => ['2020-10-10', true],
            '2020-11-10' => ['2020-11-10', false],
            '1920-10-11' => ['1920-10-11', false],
        ];
    }

    /**
     * @dataProvider provideKenyanMashujaaDayData
     */
    public function test_it_recognizes_kenyan_mashujaa_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanMashujaaDayData());
    }

    public function provideKenyanMashujaaDayData()
    {
        return [
            '1963-10-20' => ['1963-10-20', true],
            '1920-10-10' => ['1920-10-10', false],
            '2020-10-20' => ['2020-10-20', true],
            '2020-10-10' => ['2020-10-10', false],
            '2000-10-20' => ['2000-10-20', true],
        ];
    }


    /**
     * @dataProvider provideKenyanUtamaduniDayData
     */
    public function test_it_recognizes_kenyan_utamaduni_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->provideKenyanUtamaduniDayData());
    }

    public function provideKenyanUtamaduniDayData()
    {
        return [
            '1963-12-26' => ['1963-12-26', true],
            '1920-12-25' => ['1920-12-25', false],
            '2020-12-26' => ['2020-12-26', true],
            '2020-12-27' => ['2020-12-27', false],
            '2000-12-25' => ['2000-12-25', false],
        ];
    }
}