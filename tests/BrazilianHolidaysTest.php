<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

class BrazilianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideTiradentesDayData
     */
    public function test_it_recognizes_tiradentes_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTiradentesDay());
    }

    public function provideTiradentesDayData()
    {
        return [
            '1963-04-21' => ['1963-04-21', true],
            '1963-04-22' => ['1963-04-22', false],
            '1963-04-19' => ['1963-04-19', false],
            '1984-04-21' => ['1984-04-21', true],
            '2014-04-21' => ['2014-04-21', true],
        ];
    }

    /**
     * @dataProvider provideBrazilianLaborDayData
     */
    public function test_it_recognizes_brazilian_labor_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBrazilianLaborDay());
    }

    public function provideBrazilianLaborDayData()
    {
        return [
            '1994-03-16 (not labor day)' => ['1994-03-16', false],
            '1894-09-03 (Canadian labor day)' => ['1894-09-03', false],
            '1894-05-01 (Brazilian labor day)' => ['1894-05-01', true],
            '2015-09-07 (Canadian labor day)' => ['2015-09-07', false],
            '2015-05-01 (Brazilian labor day)' => ['2015-05-01', true],
            '2016-09-05 (Canadian labor day)' => ['2016-09-05', false],
            '2016-05-01 (Brazilian labor day)' => ['2016-05-01', true],
        ];
    }

    /**
     * @dataProvider provideBrazilianIndependenceDayData
     */
    public function test_it_recognizes_brazilian_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBrazilianIndependenceDay());
    }

    public function provideBrazilianIndependenceDayData()
    {
        return [
            '1963-09-07' => ['1963-09-07', true],
            '1963-04-22' => ['1963-04-22', false],
            '1963-04-19' => ['1963-04-19', false],
            '1984-04-21' => ['1984-04-21', false],
            '2014-09-07' => ['2014-09-07', true],
        ];
    }
}
