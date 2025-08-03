<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class GermanHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideGermanLabourDayData')]
    public function it_knows_german_labour_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isGermanLabourDay());
    }

    public static function provideGermanLabourDayData(): array
    {
        return [
            '1994-03-16 (not labor day)' => ['1994-03-16', false],
            '1894-09-03 (Canadian labor day)' => ['1894-09-03', false],
            '1894-05-01 (German labor day)' => ['1894-05-01', true],
            '2015-09-07 (Canadian labor day)' => ['2015-09-07', false],
            '2015-05-01 (German labor day)' => ['2015-05-01', true],
            '2016-09-05 (Canadian labor day)' => ['2016-09-05', false],
            '2016-05-01 (German labor day)' => ['2016-05-01', true],
        ];
    }

    #[Test]
    #[DataProvider('provideAscensionOfJesusData')]
    public function it_knows_ascension_of_jesus(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isAscensionOfJesus());
    }

    public static function provideAscensionOfJesusData(): array
    {
        return [
            '2019-05-30' => ['2019-05-30', true],
            '1990-05-29' => ['1990-05-29', false],
            '2019-05-29' => ['2019-05-29', false],
            '2020-05-21' => ['2020-05-21', true],
            '2021-05-13' => ['2021-05-13', true],
            '2021-06-13' => ['2021-06-13', false],
            '2022-05-26' => ['2022-05-26', true],
        ];
    }

    #[Test]
    #[DataProvider('provideWhitSundayData')]
    public function it_knows_whitsunday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isWhitSunday());
    }

    public static function provideWhitSundayData(): array
    {
        return [
            '1990-06-09' => ['1990-06-09', false],
            '2019-06-09' => ['2019-06-09', true],
            '2019-09-06' => ['2019-09-06', false],
            '2020-05-31' => ['2020-05-31', true],
            '2021-05-23' => ['2021-05-23', true],
            '2021-06-13' => ['2021-06-13', false],
            '2022-06-05' => ['2022-06-05', true],
        ];
    }

    #[Test]
    #[DataProvider('provideWhitSundayData')]
    public function it_knows_whitsun(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isWhitsun());
    }

    #[Test]
    #[DataProvider('provideWhitSundayData')]
    public function it_knows_pentecost(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPentecost());
    }

    #[Test]
    #[DataProvider('provideWhitSundayData')]
    public function it_knows_pentecost_sunday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPentecostSunday());
    }

    #[Test]
    #[DataProvider('provideWhitMondayData')]
    public function it_knows_whitmonday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isWhitMonday());
    }

    public static function provideWhitMondayData(): array
    {
        return [
            '1990-06-10' => ['1990-06-10', false],
            '2019-06-10' => ['2019-06-10', true],
            '2019-10-06' => ['2019-10-06', false],
            '2020-06-01' => ['2020-06-01', true],
            '2021-05-24' => ['2021-05-24', true],
            '2021-06-14' => ['2021-06-14', false],
            '2022-06-06' => ['2022-06-06', true],
        ];
    }

    #[Test]
    #[DataProvider('provideWhitMondayData')]
    public function it_knows_pentecost_monday(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isPentecostMonday());
    }

    #[Test]
    #[DataProvider('provideCorpusChristiData')]
    public function it_knows_corpus_christi(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isCorpusChristi());
    }

    public static function provideCorpusChristiData(): array
    {
        return [
            '1990-06-20' => ['1990-06-20', false],
            '2019-06-20' => ['2019-06-20', true],
            '2019-06-21' => ['2019-06-21', false],
            '2020-06-11' => ['2020-06-11', true],
            '2021-03-06' => ['2021-03-06', false],
            '2021-06-03' => ['2021-06-03', true],
            '2022-06-16' => ['2022-06-16', true],
        ];
    }

    #[Test]
    #[DataProvider('provideGermanUnityDayData')]
    public function it_knows_german_unity_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isGermanUnityDay());
    }

    public static function provideGermanUnityDayData(): array
    {
        return [
            '1990-03-10' => ['1990-03-10', false],
            '1990-10-02' => ['1990-10-02', false],
            '1990-10-03' => ['1990-10-03', true],
            '1989-10-03' => ['1989-10-03', false],
            '2020-10-03' => ['2020-10-03', true],
            '2020-10-04' => ['2020-10-04', false],
            '2022-10-03' => ['2022-10-03', true],
        ];
    }

    #[Test]
    #[DataProvider('provideChristmasEveData')]
    public function it_knows_heiliger_abend(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isHeiligerAbend());
    }

    public static function provideChristmasEveData(): array
    {
        return [
            '1963-12-24' => ['1963-12-24', true],
            '1972-12-25' => ['1972-12-25', false],
            '1987-12-24' => ['1987-12-24', true],
            '1993-12-24' => ['1993-12-24', true],
            '2004-12-23' => ['2004-12-23', false],
            '2020-12-24' => ['2020-12-24', true],
            '2020-01-24' => ['2020-01-24', false],
            '2037-12-24' => ['2037-12-24', true],
            '2057-12-25' => ['2057-12-25', false],
        ];
    }

    #[Test]
    #[DataProvider('provideChristmasEveData')]
    public function it_knows_heilig_abend(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isHeiligAbend());
    }
}
