<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait SwedishDates
{
    public function registerSwedishDates(): void
    {
        Carbon::macro('isSwedishMidsummerDay', function () {
            // Midsummer Day, time to eat herring, potatoes and sour cream.
            return  $this->month === 6 &&
                    $this->weekday() === Carbon::SATURDAY &&
                    ($this->day >= 20 && $this->day <= 26);
        });

        Carbon::macro('isChristmasEve', function () {
            // Swedes celebrate Christmas Eve, Christmas Day is just another holiday.
            return $this->month === 12 && $this->day === 24;
        });

        Carbon::macro('isSwedishNationalDay', function () {
            // Previously knows as Swedish Flag Day before 1983.
            return $this->month === 6 && $this->day === 6;
        });
    }
}
