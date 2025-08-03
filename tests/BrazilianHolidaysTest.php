<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class BrazilianHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideTiradentesDayData')]
    public function it_recognizes_tiradentes_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTiradentesDay());
    }

    public static function provideTiradentesDayData(): array
    {
        return [
            '1963-04-21' => ['1963-04-21', true],
            '1963-04-22' => ['1963-04-22', false],
            '1963-04-19' => ['1963-04-19', false],
            '1984-04-21' => ['1984-04-21', true],
            '2014-04-21' => ['2014-04-21', true],
        ];
    }

    #[Test]
    #[DataProvider('provideBrazilianLaborDayData')]
    public function it_recognizes_brazilian_labor_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBrazilianLaborDay());
    }

    public static function provideBrazilianLaborDayData(): array
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

    #[Test]
    #[DataProvider('provideBrazilianIndependenceDayData')]
    public function it_recognizes_brazilian_independence_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBrazilianIndependenceDay());
    }

    public static function provideBrazilianIndependenceDayData(): array
    {
        return [
            '1963-09-07' => ['1963-09-07', true],
            '1963-04-22' => ['1963-04-22', false],
            '1963-04-19' => ['1963-04-19', false],
            '1984-04-21' => ['1984-04-21', false],
            '2014-09-07' => ['2014-09-07', true],
        ];
    }

    #[Test]
    #[DataProvider('provideDayOfOurLadyAparecidaData')]
    public function it_recognizes_the_day_of_Our_Lady_Aparecida(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTheDayOfOurLadyAparecida());
    }

    public static function provideDayOfOurLadyAparecidaData(): array
    {
        return [
            '1963-10-12' => ['1963-10-12', true],
            '1999-04-22' => ['1999-04-22', false],
            '1974-05-19' => ['1974-05-19', false],
            '1984-06-21' => ['1984-06-21', false],
            '2014-10-12' => ['2014-10-12', true],
        ];
    }

    #[Test]
    #[DataProvider('provideBrazilianRepublicProclamationDay')]
    public function it_recognizes_the_brazilian_republic_proclamation_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isBrazilianRepublicProclamationDay());
    }

    public static function provideBrazilianRepublicProclamationDay(): array
    {
        return [
            '1963-11-15`' => ['1963-11-15', true],
            '1999-04-22' => ['1999-04-22', false],
            '1974-05-19' => ['1974-05-19', false],
            '1984-06-21' => ['1984-06-21', false],
            '2014-11-15' => ['2014-11-15', true],
        ];
    }
}
