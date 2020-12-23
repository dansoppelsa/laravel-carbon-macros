<?php
namespace CarbonMacros;

use Illuminate\Support\Carbon;

class IndianHolidaysTest extends TestCase
{

    /**
     * @dataProvider provideRepublicDayData
     */
    public function test_it_recognizes_republic_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndianRepublicDay());
    }

    /**
     * @return array[]
     */
    public function provideRepublicDayData()
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

    /**
     * @dataProvider provideIndependenceDayData
     */
    public function test_it_recognizes_independence_day($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isIndianIndependenceDay());
    }

    /**
     * @return array[]
     */
    public function provideIndependenceDayData()
    {
        return [
            '1947-08-15' => ['1947-08-15', true],
            '1946-08-15' => ['1946-08-15', false],
            '1947-08-17' => ['1947-08-17', false],
            '1950-08-15' => ['1950-08-15', true],
            '2020-08-15' => ['2020-08-15', true],
        ];
    }


    /**
     * @dataProvider provideGandhiJayantiData
     */
    public function test_it_recognizes_gandhi_jayanti($date, $validity)
    {
        $date = Carbon::parse($date);

        $this->assertSame($validity, $date->isGandhiJayanti());
    }

    /**
     * @return array[]
     */
    public function provideGandhiJayantiData()
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