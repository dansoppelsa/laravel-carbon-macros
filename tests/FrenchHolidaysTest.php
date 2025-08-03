<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class FrenchHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideAssumptionDayData')]
    public function it_recognizes_assumption_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAssumptionDay());
    }

    #[Test]
    #[DataProvider('provideAscensionDayData')]
    public function it_recognizes_ascension_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAscensionDay());
    }

    #[Test]
    #[DataProvider('provideFirstWarArmisticeDayData')]
    public function it_recognizes_first_war_armistice_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isFirstWarArmisticeDay());
    }

    #[Test]
    #[DataProvider('provideEasterMondayDayData')]
    public function it_recognizes_easter_monday_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEasterMonday());
    }

    #[Test]
    #[DataProvider('provideFrenchNationalDayData')]
    public function it_recognizes_french_national_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isFrenchNationalDay());
    }

    #[Test]
    #[DataProvider('providePentecostDayData')]
    public function it_recognizes_pentecost_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPentecostDay());
    }

    #[Test]
    #[DataProvider('provideSecondWarArmisticeDayData')]
    public function it_recognizes_second_war_armistice_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSecondWarArmisticeDay());
    }

    public static function provideAssumptionDayData(): array
    {
        return [
            '1982-08-15' => ['1982-08-15', true],
            '1982-08-16' => ['1982-08-16', false],
            '1982-07-15' => ['1982-07-15', false],
        ];
    }

    public static function provideAscensionDayData(): array
    {
        return [
            '2019-05-30' => ['2019-05-30', true],
            '2019-05-29' => ['2919-05-20', false],
            '2019-05-31' => ['2019-05-31', false],
            '2020-05-21' => ['2020-05-21', true],
            '2020-05-20' => ['2020-05-20', false],
            '2020-05-22' => ['2020-05-22', false],
        ];
    }

    public static function provideEasterMondayDayData(): array
    {
        return [
            '2019-04-22' => ['2019-04-22', true],
            '2019-04-21' => ['2019-04-21', false],
            '2019-04-23' => ['2019-04-23', false],
            '2020-04-13' => ['2020-04-13', true],
            '2020-04-12' => ['2020-04-12', false],
            '2020-04-14' => ['2020-04-14', false],
        ];
    }

    public static function provideFirstWarArmisticeDayData(): array
    {
        return [
            '1982-11-11' => ['1982-11-11', true],
            '1911-11-11' => ['1911-11-11', false],
            '1982-11-12' => ['1918-11-12', false],
            '1982-10-11' => ['1918-10-11', false],
        ];
    }

    public static function provideFrenchNationalDayData(): array
    {
        return [
            '1982-07-14' => ['1982-07-14', true],
            '1990-07-14' => ['1990-07-14', true],
            '1880-07-14' => ['1880-07-14', true],
            '1879-07-14' => ['1879-07-14', false],
            '1982-07-12' => ['1918-07-12', false],
            '1982-06-14' => ['1918-06-14', false],
        ];
    }

    public static function providePentecostDayData(): array
    {
        return [
            '2019-06-09' => ['2019-06-09', true],
            '2019-06-08' => ['2019-06-08', false],
            '2019-06-10' => ['2019-06-10', false],
            '2020-05-31' => ['2020-05-31', true],
            '2020-05-30' => ['2020-05-30', false],
            '2020-06-01' => ['2020-06-01', false],
        ];
    }

    public static function provideSecondWarArmisticeDayData(): array
    {
        return [
            '1982-05-08' => ['1982-05-08', true],
            '1911-05-08' => ['1911-05-08', false],
            '1982-05-07' => ['1918-05-07', false],
            '1982-05-09' => ['1918-05-09', false],
        ];
    }
}
