<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class KenyanHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideKenyanIndependenceDayData')]
    public function it_recognizes_kenyan_independence_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanIndependenceDay());
    }

    public static function provideKenyanIndependenceDayData(): array
    {
        return [
            '1963-12-12' => ['1963-12-12', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-12-12' => ['2020-12-12', true],
            '1800-12-12' => ['1800-12-12', false],
        ];
    }

    #[Test]
    #[DataProvider('provideKenyanJamhuriDayData')]
    public function it_recognizes_kenyan_jamhuri_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanJamhuriDay());
    }

    public static function provideKenyanJamhuriDayData(): array
    {
        return [
            '1963-12-12' => ['1963-12-12', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-12-12' => ['2020-12-12', true],
            '1800-12-12' => ['1800-12-12', false],
        ];
    }

    #[Test]
    #[DataProvider('provideKenyanLabourDayData')]
    public function it_recognizes_kenyan_labour_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanLabourDay());
    }

    public static function provideKenyanLabourDayData(): array
    {
        return [
            '1963-05-01' => ['1963-05-01', true],
            '1963-12-11' => ['1963-12-11', false],
            '2020-10-19' => ['2020-10-19', false],
            '2020-05-01' => ['2020-05-01', true],
            '2010-05-01' => ['2010-05-01', true],
        ];
    }

    #[Test]
    #[DataProvider('provideKenyanMadarakaDayData')]
    public function it_recognizes_kenyan_madaraka_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanMadarakaDay());
    }

    public static function provideKenyanMadarakaDayData(): array
    {
        return [
            '1963-06-01' => ['1963-06-01', true],
            '1920-06-01' => ['1920-06-01', true],
            '2020-06-01' => ['2020-06-01', true],
            '2020-05-01' => ['2020-05-01', false],
            '1920-05-01' => ['1920-05-01', false],
        ];
    }

    #[Test]
    #[DataProvider('provideKenyanHudumaDayData')]
    public function it_recognizes_kenyan_huduma_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanHudumaDay());
    }

    public static function provideKenyanHudumaDayData(): array
    {
        return [
            '1963-10-10' => ['1963-10-10', true],
            '1920-10-09' => ['1920-10-09', false],
            '2020-10-10' => ['2020-10-10', true],
            '2020-11-10' => ['2020-11-10', false],
            '1920-10-11' => ['1920-10-11', false],
        ];
    }

    #[Test]
    #[DataProvider('provideKenyanMashujaaDayData')]
    public function it_recognizes_kenyan_mashujaa_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanMashujaaDay());
    }

    public static function provideKenyanMashujaaDayData(): array
    {
        return [
            '1963-10-20' => ['1963-10-20', true],
            '1920-10-10' => ['1920-10-10', false],
            '2020-10-20' => ['2020-10-20', true],
            '2020-10-10' => ['2020-10-10', false],
            '2000-10-20' => ['2000-10-20', true],
        ];
    }


    #[Test]
    #[DataProvider('provideKenyanUtamaduniDayData')]
    public function it_recognizes_kenyan_utamaduni_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isKenyanUtamaduniDay());
    }

    public static function provideKenyanUtamaduniDayData(): array
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
