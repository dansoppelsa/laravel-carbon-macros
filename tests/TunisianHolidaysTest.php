<?php

namespace CarbonMacros;

use Illuminate\Support\Carbon;

class TunisianHolidaysTest extends TestCase
{
    /**
     * @dataProvider provideTunisianIndependenceDay
     */
    public function test_it_recognizes_tunisian_independence_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianIndependenceDay());
    }

    public function provideTunisianIndependenceDay(): array
    {
        return [
            '1956-03-20' => ['1956-03-20', true],
            '2022-03-20' => ['2022-03-20', true],
            '1948-03-20' => ['1948-03-20', false],
            '1972-03-05' => ['1972-03-05', false],
        ];
    }

    /**
     * @dataProvider provideTunisianMartyrsDay
     */
    public function test_it_recognizes_tunisian_martyrs_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianMartyrsDay());
    }

    public function provideTunisianMartyrsDay(): array
    {
        return [
            '1956-04-09' => ['1956-04-09', true],
            '2022-03-20' => ['2022-03-20', false],
            '1948-04-09' => ['1948-04-09', false],
            '1972-04-09' => ['1972-04-09', true],
        ];
    }

    /**
     * @dataProvider provideTunisianLabourDay
     */
    public function test_it_recognizes_tunisian_labour_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianLabourDay());
    }

    public function provideTunisianLabourDay(): array
    {
        return [
            '2022-03-20' => ['2022-03-20', false],
            '2022-05-01' => ['2022-05-01', true],
            '1972-04-09' => ['1972-04-09', false],
            '1998-05-01' => ['1998-05-01', true],
        ];
    }

    /**
     * @dataProvider provideTunisianRepublicDay
     */
    public function test_it_recognizes_tunisian_republic_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianRepublicDay());
    }

    public function provideTunisianRepublicDay(): array
    {
        return [
            '1956-07-25' => ['1956-07-25', true],
            '2022-03-20' => ['2022-03-20', false],
            '1948-04-09' => ['1948-04-09', false],
            '1972-07-25' => ['1972-07-25', true],
        ];
    }

    /**
     * @dataProvider provideTunisianWomensDay
     */
    public function test_it_recognizes_tunisian_womens_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianWomensDay());
    }

    public function provideTunisianWomensDay(): array
    {
        return [
            '1956-08-13' => ['1956-08-13', false],
            '2022-08-13' => ['2022-08-13', true],
            '2025-08-14' => ['2025-08-14', false],
            '1993-08-13' => ['1993-08-13', true],
        ];
    }

    /**
     * @dataProvider provideTunisianEvacuationDay
     */
    public function test_it_recognizes_tunisian_evacuation_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianEvacuationDay());
    }

    public function provideTunisianEvacuationDay(): array
    {
        return [
            '1956-10-15' => ['1956-10-15', false],
            '2022-10-15' => ['2022-10-15', true],
            '1963-10-15' => ['1963-10-15', true],
            '2025-10-16' => ['2025-10-16', false],
        ];
    }

    /**
     * @dataProvider provideTunisianRevolutionAndYouthDay
     */
    public function test_it_recognizes_tunisian_revolution_and_youth_day($date, $validity): void
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isTunisianRevolutionAndYouthDay());
    }

    public function provideTunisianRevolutionAndYouthDay(): array
    {
        return [
            '1956-12-17' => ['1956-12-17', false],
            '2011-12-17' => ['2011-12-17', true],
            '2022-12-17' => ['2022-12-17', true],
            '2025-12-28' => ['2025-12-28', false],
        ];
    }
}