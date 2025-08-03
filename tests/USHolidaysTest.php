<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class USHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideMlkJrDayData')]
    public function it_knows_mlk_jr_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isMlkJrDay());
    }

    public static function provideMlkJrDayData(): array
    {
        return [
            '1950-01-16' => ['1950-01-16', false],
            '2020-01-19' => ['2020-01-19', false],
            '2020-01-20' => ['2020-01-20', true],
            '2020-01-21' => ['2020-01-21', false],
            '2025-01-19' => ['2025-01-19', false],
            '2025-01-20' => ['2025-01-20', true],
            '2025-01-21' => ['2025-01-21', false],
            '2025-02-21' => ['2025-02-21', false],
        ];
    }

    #[Test]
    #[DataProvider('provideIndependenceDayData')]
    public function it_knows_independence_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndependenceDay());
    }

    public static function provideIndependenceDayData(): array
    {
        return [
            '1780-07-04' => ['1780-07-04', false],
            '1781-07-04' => ['1781-07-04', true],
            '1950-07-04' => ['1950-07-04', true],
            '2020-07-03' => ['2020-07-03', false],
            '2020-07-04' => ['2020-07-04', true],
            '2020-07-05' => ['2020-07-05', false],
            '2050-07-04' => ['2050-07-04', true],
        ];
    }

    #[Test]
    #[DataProvider('provideMemorialDayData')]
    public function it_knows_memorial_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isMemorialDay());
    }

    public static function provideMemorialDayData(): array
    {
        return [
            '1873-05-26' => ['1873-05-26', false],
            '1874-05-25' => ['1874-05-25', true],
            '2019-05-27' => ['2019-05-27', true],
            '2020-05-24' => ['2020-05-24', false],
            '2020-05-25' => ['2020-05-25', true],
            '2020-05-26' => ['2020-05-26', false],
            '2021-05-31' => ['2021-05-31', true],
            '2022-05-30' => ['2022-05-30', true],
            '2050-05-29' => ['2050-05-29', false],
            '2050-05-30' => ['2050-05-30', true],
        ];
    }

    #[Test]
    #[DataProvider('provideLaborDayData')]
    public function it_knows_labor_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isLaborDay());
    }

    public static function provideLaborDayData(): array
    {
        return [
            '1893-09-04' => ['1893-09-04', false],
            '1894-09-03' => ['1894-09-03', true],
            '2015-09-07' => ['2015-09-07', true],
            '2016-09-05' => ['2016-09-05', true],
            '2020-09-06' => ['2020-09-06', false],
            '2020-09-07' => ['2020-09-07', true],
            '2020-09-08' => ['2020-09-08', false],
            '2025-09-01' => ['2025-09-01', true],
            '2025-09-02' => ['2025-09-02', false],
        ];
    }

    #[Test]
    #[DataProvider('provideVeteransDayData')]
    public function it_knows_veterans_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isVeteransDay());
    }

    public static function provideVeteransDayData(): array
    {
        return [
            '1953-11-11' => ['1953-11-11', false],
            '1954-11-11' => ['1954-11-11', true],
            '2020-11-10' => ['2020-11-10', false],
            '2020-11-11' => ['2020-11-11', true],
            '2020-11-12' => ['2020-11-12', false],
            '2050-11-11' => ['2050-11-11', true],
        ];
    }

    #[Test]
    #[DataProvider('provideAmericanThanksgivingData')]
    public function it_knows_us_thanksgiving_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAmericanThanksgiving());
    }

    public static function provideAmericanThanksgivingData(): array
    {
        return [
            '2023-09-28' => ['2023-09-28', false],
            '1788-11-27' => ['1788-11-27', false],
            '1789-11-26' => ['1789-11-26', true],
            '2019-11-27' => ['2019-11-27', false],
            '2019-11-28' => ['2019-11-28', true],
            '2020-11-25' => ['2020-11-25', false],
            '2020-11-26' => ['2020-11-26', true],
            '2020-11-27' => ['2020-11-27', false],
            '2021-11-25' => ['2021-11-25', true],
            '2022-11-24' => ['2022-11-24', true],
        ];
    }

    #[Test]
    #[DataProvider('providePresidentsDayData')]
    public function it_knows_presidents_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPresidentsDay());
    }

    public static function providePresidentsDayData(): array
    {
        return [
            '1879-02-17' => ['1879-02-17', false],
            '1880-02-16' => ['1880-02-16', true],
            '2017-02-20' => ['2017-02-20', true],
            '2018-02-19' => ['2018-02-19', true],
            '2019-02-18' => ['2019-02-18', true],
            '2020-02-17' => ['2020-02-17', true],
            '2029-02-19' => ['2029-02-19', true],
        ];
    }

    #[Test]
    #[DataProvider('provideColumbusDayData')]
    public function it_knows_columbus_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isColumbusDay());
    }

    public static function provideColumbusDayData(): array
    {
        return [
            '1868-10-12' => ['1868-10-12', false],
            '1869-10-11' => ['1869-10-11', true],
            '2020-10-13' => ['2020-10-13', false],
            '2022-10-11' => ['2022-10-11', false],
            '2015-10-12' => ['2015-10-12', true],
            '2016-10-10' => ['2016-10-10', true],
            '2017-10-09' => ['2017-10-09', true],
            '2018-10-08' => ['2018-10-08', true],
            '2019-10-14' => ['2019-10-14', true],
            '2019-10-15' => ['2019-10-15', false],
            '2020-10-12' => ['2020-10-12', true],
            '2021-10-11' => ['2021-10-11', true],
            '2022-10-10' => ['2022-10-10', true],
            '2023-10-09' => ['2023-10-09', true],
            '2024-10-14' => ['2024-10-14', true],
            '2025-10-13' => ['2025-10-13', true],
        ];
    }
}
