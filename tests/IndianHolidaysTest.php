<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class IndianHolidaysTest extends TestCase
{
    #[Test]
    #[DataProvider('provideRepublicDayData')]
    public function it_recognizes_republic_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndianRepublicDay());
    }

    public static function provideRepublicDayData(): array
    {
        return [
            '1950-01-26' => ['1950-01-26', true],
            '1949-01-26' => ['1949-01-26', false],
            '1969-01-26' => ['1969-01-26', true],
            '2020-01-26' => ['2020-01-26', true],
            '1949-01-28' => ['1949-01-28', false],
            '1950-01-28' => ['1950-01-28', false],
        ];
    }

    #[Test]
    #[DataProvider('provideIndependenceDayData')]
    public function it_recognizes_independence_day(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndianIndependenceDay());
    }


    public static function provideIndependenceDayData(): array
    {
        return [
            '1947-08-15' => ['1947-08-15', true],
            '1946-08-15' => ['1946-08-15', false],
            '1947-08-17' => ['1947-08-17', false],
            '1950-08-15' => ['1950-08-15', true],
            '2020-08-15' => ['2020-08-15', true],
        ];
    }


    #[Test]
    #[DataProvider('provideGandhiJayantiData')]
    public function it_recognizes_gandhi_jayanti(string $date, bool $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isGandhiJayanti());
    }

    
    public static function provideGandhiJayantiData(): array
    {
        return [
            '1869-10-02' => ['1869-10-02', true],
            '1859-10-02' => ['1859-10-02', false],
            '1869-10-10' => ['1869-10-10', false],
            '1969-10-02' => ['1969-10-02', true],
            '2020-10-02' => ['2020-10-02', true],
        ];
    }

}