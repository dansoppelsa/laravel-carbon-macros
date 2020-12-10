<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait SwedishHolidays
{
    public function registerSwedishHolidays()
    {
        Carbon::macro('isSwedishMidsummerDay', function () {
            // Midsummer Day, time to eat herring, potatoes and sour cream.

            return $this->month === Carbon::JUNE &&
                $this->weekday() === Carbon::SATURDAY &&
                ($this->day >= 20 && $this->day <= 26);
        });

        Carbon::macro('isChristmasEve', function () {
            // Swedes celebrate Christmas Eve, Christmas Day is just another holiday.

            return $this->month === Carbon::DECEMBER && $this->day === 24;
        });

        Carbon::macro('isSwedishNationalDay', function () {
            // Previously knows as Swedish Flag Day before 1983.

            return $this->month === Carbon::JUNE && $this->day === 6;
        });
    }
}