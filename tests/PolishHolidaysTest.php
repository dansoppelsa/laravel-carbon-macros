<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class PolishHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('providePolishIndependenceDayData')]
    public function it_knows_polish_independence_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishIndependenceDay());
    }

    public static function providePolishIndependenceDayData(): array
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

    #[Test]
    #[DataProvider('providePolishConstitutionDayData')]
    public function it_knows_polish_constitution_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishConstitutionDay());
    }

    public static function providePolishConstitutionDayData(): array
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

    #[Test]
    #[DataProvider('providePolishLabourDayData')]
    public function it_knows_polish_labour_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishLabourDay());
    }

    public static function providePolishLabourDayData(): array
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
    #[DataProvider('provideEpiphanyData')]
    public function it_knows_epiphany(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishEpiphany());
    }

    public static function provideEpiphanyData(): array
    {
        return [
            '1986-01-06' => ['1986-01-06', false],
            '2019-01-06' => ['2019-01-06', true],
            '2019-10-05' => ['2019-10-05', false],
            '2010-12-01' => ['2010-12-01', false],
            '2022-01-06' => ['2022-01-06', true],
            '1992-01-06' => ['1992-01-06', false],
            '2050-08-01' => ['2050-08-01', false],
            '2050-01-06' => ['2050-01-06', true],
        ];
    }

    #[Test]
    #[DataProvider('providePolishArmedForcesDay')]
    public function it_knows_polish_armed_forces_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPolishArmedForcesDay());
    }

    public static function providePolishArmedForcesDay(): array
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
