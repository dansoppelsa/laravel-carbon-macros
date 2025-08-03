<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class MultiNationalDatesTest extends TestCase
{
    #[Test]
    #[DataProvider('provideNewYearsDayData')]
    public function it_knows_new_years_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isNewYearsDay());
    }

    public static function provideNewYearsDayData(): array
    {
        return [
            '1963-11-22' => ['1963-11-22', false],
            '1970-01-01' => ['1970-01-01', true],
            '1982-01-01' => ['1982-01-01', true],
            '1999-12-31' => ['1999-12-31', false],
            '2020-01-01' => ['2020-01-01', true],
            '2020-01-02' => ['2020-01-02', false],
            '2050-01-01' => ['2050-01-01', true],
            '2038-01-19' => ['2038-01-19', false],
        ];
    }

    #[Test]
    #[DataProvider('provideEasterSundayData')]
    public function it_knows_easter_sunday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isEasterSunday());
    }

    public static function provideEasterSundayData(): array
    {
        return [
            '1905-04-23' => ['1905-04-23', true],
            '1970-03-28' => ['1970-03-28', false],
            '1970-03-29' => ['1970-03-29', true],
            '1970-03-30' => ['1970-03-30', false],
            '1990-04-14' => ['1990-04-14', false],
            '1990-04-15' => ['1990-04-15', true],
            '1990-04-16' => ['1990-04-16', false],
            '2020-04-12' => ['2020-04-12', true],
            '2020-04-13' => ['2020-04-13', false],
            '2050-04-10' => ['2050-04-10', true],
            '2050-04-11' => ['2050-04-11', false],
        ];
    }

    #[Test]
    #[DataProvider('provideGoodFridayData')]
    public function it_knows_good_friday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isGoodFriday());
    }

    public static function provideGoodFridayData(): array
    {
        return [
            '1905-04-21' => ['1905-04-21', true],
            '1970-03-26' => ['1970-03-26', false],
            '1970-03-27' => ['1970-03-27', true],
            '1970-03-28' => ['1970-03-28', false],
            '1970-03-30' => ['1970-03-30', false],
            '1990-04-14' => ['1990-04-14', false],
            '1990-04-13' => ['1990-04-13', true],
            '1990-04-16' => ['1990-04-16', false],
            '2020-04-10' => ['2020-04-10', true],
            '2020-04-13' => ['2020-04-13', false],
            '2050-04-08' => ['2050-04-08', true],
            '2050-04-11' => ['2050-04-11', false],
        ];
    }

    #[Test]
    #[DataProvider('provideAllSaintsDayData')]
    public function it_recognizes_all_saints_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAllSaintsDay());
    }

    public static function provideAllSaintsDayData(): array
    {
        return [
            '1982-11-01' => ['1982-11-01', true],
            '1982-01-01' => ['1982-01-01', false],
            '1982-11-02' => ['1982-11-02', false],
            '1968-08-29' => ['1968-08-29', false],
            '1970-05-10' => ['1970-05-10', false],
            '2000-11-01' => ['2000-11-01', true],
            '1356-12-10' => ['1356-12-10', false],
            '1993-11-01' => ['1993-11-01', true],
            '2033-12-09' => ['2033-12-09', false]
        ];
    }

    #[Test]
    #[DataProvider('provideChristmasDayData')]
    public function it_knows_christmas_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isChristmasDay());
    }

    public static function provideChristmasDayData(): array
    {
        return [
            '1900-12-25' => ['1900-12-25', true],
            '1900-12-26' => ['1900-12-26', false],
            '1920-12-25' => ['1920-12-25', true],
            '1950-12-25' => ['1950-12-25', true],
            '1980-12-24' => ['1980-12-24', false],
            '1980-12-25' => ['1980-12-25', true],
            '1980-12-26' => ['1980-12-26', false],
            '2020-12-25' => ['2020-12-25', true],
            '2021-12-25' => ['2021-12-25', true],
            '2021-12-26' => ['2021-12-26', false],
            '2050-12-25' => ['2050-12-25', true],
        ];
    }

    #[Test]
    #[DataProvider('provideNewYearsEveData')]
    public function it_knows_new_years_eve(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isNewYearsEve());
    }

    public static function provideNewYearsEveData(): array
    {
        return [
            '1800-12-31' => ['1800-12-31', true],
            '1950-12-31' => ['1950-12-31', true],
            '2020-07-04' => ['2020-07-04', false],
            '2020-12-30' => ['2020-12-30', false],
            '2020-12-31' => ['2020-12-31', true],
            '2021-01-01' => ['2021-01-01', false],
            '2050-12-31' => ['2050-12-31', true],
        ];
    }

    #[Test]
    #[DataProvider('provideOrthodoxChristmasEveData')]
    public function it_knows_orthodox_christmas_eve(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isOrthodoxChristmasEve());
    }

    public static function provideOrthodoxChristmasEveData(): array
    {
        return [
            '1900-01-06' => ['1900-01-06', true],
            '1900-01-07' => ['1900-01-07', false],
            '1982-01-06' => ['1982-01-06', true],
            '1982-01-08' => ['1982-01-08', false],
            '2020-01-06' => ['2020-01-06', true],
            '2020-01-07' => ['2020-01-07', false],
            '2050-01-06' => ['2050-01-06', true],
        ];
    }

    #[Test]
    #[DataProvider('provideOrthodoxChristmasDayData')]
    public function it_knows_orthodox_christmas_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isOrthodoxChristmasDay());
    }

    public static function provideOrthodoxChristmasDayData(): array
    {
        return [
            '1900-01-07' => ['1900-01-07', true],
            '1900-01-08' => ['1900-01-08', false],
            '1982-01-07' => ['1982-01-07', true],
            '1982-01-09' => ['1982-01-09', false],
            '2020-01-07' => ['2020-01-07', true],
            '2020-01-08' => ['2020-01-08', false],
            '2050-01-07' => ['2050-01-07', true],
        ];
    }
}
