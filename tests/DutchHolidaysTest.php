<?php


namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class DutchHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideDutchNationalDayData')]
    public function it_recognizes_dutch_national_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchNationalDay());
    }

    #[Test]
    #[DataProvider('provideDutchRemembranceDayData')]
    public function it_recognizes_dutch_rememberance_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchRemembranceDay());
    }

    #[Test]
    #[DataProvider('provideDutchLiberationDayData')]
    public function it_recognizes_dutch_liberation_day(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isDutchLiberationDay());
    }

    #[Test]
    #[DataProvider('provideSaintNicholasEveData')]
    public function it_recognizes_saint_nicholas_eve(string $date, bool $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isSaintNicholasEve());
    }

    public static function provideDutchNationalDayData(): array
    {
        return [
            '1930-04-30' => ['1930-04-30', false],
            '1949-04-30' => ['1949-04-30', true],
            '2013-04-30' => ['2013-04-30', true],
            '2014-04-26' => ['2014-04-26', true],
            '2014-04-27' => ['2014-04-27', false],
            '2014-04-30' => ['2014-04-30', false],
            '2015-04-26' => ['2015-04-26', false],
            '2015-04-27' => ['2015-04-27', true],
            '2041-04-27' => ['2041-04-27', true],
            '2041-04-28' => ['2041-04-28', false],
            '2042-04-26' => ['2042-04-26', true],
            '2042-04-27' => ['2042-04-27', false],
        ];
    }

    
    public static function provideDutchRemembranceDayData(): array
    {
        return [
            '1944-05-04' => ['1944-05-04', false],
            '1946-05-04' => ['1946-05-04', true],
            '1960-05-04' => ['1960-05-04', true],
        ];
    }

    
    public static function provideDutchLiberationDayData(): array
    {
        return [
            '1944-05-05' => ['1944-05-05', false],
            '1946-05-05' => ['1946-05-05', true],
            '1960-05-05' => ['1960-05-05', true],
        ];
    }

    
    public static function provideSaintNicholasEveData(): array
    {
        return [
            '2012-12-04' => ['2012-12-04', false],
            '2012-12-05' => ['2012-12-05', true],
            '2012-12-06' => ['2012-12-06', false],
            '2013-12-05' => ['2013-12-05', true],
            '2014-12-05' => ['2014-12-05', true],
        ];
    }

}
