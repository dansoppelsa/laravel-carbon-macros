<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait MultiNationalDates
{
    public function registerMultinationalDates()
    {
        Carbon::macro('isNewYearsDay', function () {
            return $this->month === 1 && $this->day === 1;
        });

        Carbon::macro('isEasterSunday', function () {
            return $this->clone()
                ->setMonth(3)
                ->setDay(21)
                ->eq($this->clone()->subDays(easter_days($this->year)));
        });

        Carbon::macro('isGoodFriday', function () {
            return $this->clone()
                ->addDays(2)
                ->isEasterSunday();
        });

        Carbon::macro('isChristmasDay', function () {
            return $this->month === 12 && $this->day === 25;
        });

        Carbon::macro('isNewYearsEve', function () {
            return $this->month === 12 && $this->day === 31;
        });
    }
}