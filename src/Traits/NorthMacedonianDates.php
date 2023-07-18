<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

/**
 *
 */
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
        Carbon::macro('isOrthodoxChristmasEve', function () {
            // Orthodox Christmas Eve - 6th January
            return $this->month === 1 && $this->day === 6;
        });

        Carbon::macro('isOrthodoxChristmasDay', function () {
            // Orthodox Christmas Day - 7th January
            return $this->month === 1 && $this->day === 7;
        });

        Carbon::macro('isDayOffForOrthodoxChristmasDay', function () {
            // Day off for Orthodox Christmas Day - 8th January
            return $this->month === 1 && $this->day === 8;
        });

        Carbon::macro('isOrthodoxEpiphany', function () {
            // Epiphany (Orthodox) - 19th January
            return $this->month === 1 && $this->day === 19;
        });

        Carbon::macro('isNorthMacedonianLaborDay', function () {
            // Labor Day - 1st May
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isNorthMacedonianRepublicDay', function () {
            // Republic Day - 2nd August
            // Day when the Republic was proclaimed in 1944, also the proclamation of the Ilinden uprising in 1903
            return $this->month === 8 && $this->day === 2;
        });

        Carbon::macro('isFeastOfTheAssumptionOfMaryOrthodox', function () {
            // Feast of the Assumption of Mary (Orthodox) - 28th August
            return $this->month === 8 && $this->day === 28;
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

        Carbon::macro('isDayOfTheMacedonianRevolutionaryStruggle', function () {
            // Day of the Macedonian Revolutionary Struggle - 23rd October
            // Day when the Internal Macedonian Revolutionary Organization (IMRO) was established in 1893.
            return $this->month === 10 && $this->day === 23;
        });

        Carbon::macro('isNorthMacedonianSaintKlimentOhridskisDay', function () {
            // Saint Kliment Ohridski's Day - 8th December
            return $this->month === 12 && $this->day === 8;
        });
    }
}