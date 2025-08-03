<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait NorthMacedonianDates
{
    public function registerNorthMacedonianDates(): void
    {
        /*
         * https://en.wikipedia.org/wiki/Public_holidays_in_North_Macedonia
         *
         Only public holidays will be registered, as they apply for all citizens,
         regardless od ethnic or religious background
         */
        Carbon::macro('isNorthMacedonianRepublicDay', function () {
            // Republic Day - 2nd August
            // Day when the Republic was proclaimed in 1944, also the proclamation of the Ilinden uprising in 1903
            return $this->month === 8 && $this->day === 2;
        });

        Carbon::macro('isNorthMacedonianIndependenceDay', function () {
            // Independence Day - 8th September
            // Day of independence from Yugoslavia in 1991
            return $this->month === 9 && $this->day === 8;
        });

        Carbon::macro('isNorthMacedonianDayOfPeoplesUprising', function () {
            // Day of People's Uprising - 11th October
            // Symbolic beginning of the Macedonian anti-fascist resistance during WWII in 1941
            return $this->month === 10 && $this->day === 11;
        });
    }
}