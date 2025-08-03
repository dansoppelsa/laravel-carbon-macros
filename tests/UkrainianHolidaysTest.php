<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class UkrainianHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideIndependenceDayData')]
    public function it_knows_independence_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isUkrainianIndependenceDay());
    }

    public static function provideIndependenceDayData(): array
    {
        return [
            '1980-08-24' => ['1980-08-24', false],
            '2019-08-24' => ['2019-08-24', true],
            '2019-08-05' => ['2019-08-05', false],
            '2010-03-06' => ['2010-03-06', false],
            '2022-08-24' => ['2022-08-24', true],
            '1991-08-24' => ['1991-08-24', true],
            '2050-08-01' => ['2050-08-01', false],
            '2050-08-24' => ['2050-08-24', true],
        ];
    }

    #[Test]
    #[DataProvider('provideConstitutionDayData')]
    public function it_knows_constitution_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isUkrainianConstitutionDay());
    }

    public static function provideConstitutionDayData(): array
    {
        return [
            '1979-08-24' => ['1979-08-28', false],
            '2019-08-24' => ['2019-06-28', true],
            '2019-08-05' => ['2019-08-05', false],
            '1991-06-06' => ['1991-06-06', false],
            '2022-08-24' => ['2022-08-24', false],
            '1996-06-28' => ['1996-06-28', true],
            '2050-12-01' => ['2050-12-01', false],
            '2050-06-28' => ['2050-06-28', true],
        ];
    }

    #[Test]
    #[DataProvider('provideLabourDayData')]
    public function it_knows_ukrainian_labour_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isUkrainianLabourDay());
    }

    public static function provideLabourDayData(): array
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

    #[Test]
    #[DataProvider('provideUkraineDefenderDay')]
    public function it_knows_ukraine_defender_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isUkraineDefenderDay());
    }

    public static function provideUkraineDefenderDay(): array
    {
        return [
            '1970-08-14' => ['1970-08-14', false],
            '2019-10-14' => ['2019-10-14', true],
            '2019-10-05' => ['2019-10-05', false],
            '2010-10-14' => ['2010-10-14', false],
            '2015-10-14' => ['2015-10-14', true],
            '2005-11-14' => ['2005-11-14', false],
            '2040-02-23' => ['2040-02-23', false],
            '2050-10-14' => ['2050-10-14', true],
        ];
    }

    #[Test]
    #[DataProvider('provideKupalaNight')]
    public function it_knows_kupala_night(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKupalaNight());
    }

    public static function provideKupalaNight(): array
    {
        return [
            '1987-08-14' => ['1987-08-14', false],
            '2019-07-06' => ['2019-07-06', true],
            '2015-07-07' => ['2015-07-07', true],
            '2019-07-05' => ['2019-07-05', false],
            '2010-10-14' => ['2010-10-14', false],
            '2005-11-14' => ['2005-11-14', false],
            '2040-07-06' => ['2040-07-06', true],
            '2050-07-06' => ['2050-07-06', true],
        ];
    }

    #[Test]
    #[DataProvider('provideVictoryDayOverNazism')]
    public function it_knows_victory_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isVictoryDayOverNazism());
    }

    public static function provideVictoryDayOverNazism(): array
    {
        return [
            '1990-05-09' => ['1990-05-09', false],
            '2019-05-09' => ['2019-05-09', true],
            '2015-05-09' => ['2015-05-09', true],
            '2010-05-09' => ['2010-05-09', false],
            '2006-10-11' => ['2006-10-11', false],
            '2005-11-14' => ['2005-11-14', false],
            '2040-02-26' => ['2040-02-26', false],
            '2050-05-09' => ['2050-05-09', true],
        ];
    }
}
