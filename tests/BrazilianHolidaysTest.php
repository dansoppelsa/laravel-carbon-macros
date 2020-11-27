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
}
