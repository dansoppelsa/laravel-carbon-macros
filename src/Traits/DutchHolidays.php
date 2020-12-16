<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait DutchHolidays
{
    /**
     *
     */
    public function registerDutchHolidays()
    {
        Carbon::macro('isDutchLiberationDay', function () {
            // Called "Bevrijdingsdag" in Dutch
            // https://en.wikipedia.org/wiki/Liberation_Day_(Netherlands)

            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 05 && $this->day === 05;
        });

        Carbon::macro('isSaintNicholas', function () {
            // Called "Sinterklaas" in Dutch
            // https://en.wikipedia.org/wiki/Sinterklaas
            return $this->month === 12 && $this->day === 05;
        });

        Carbon::macro('isDutchRemembranceDay', function () {
            // https://en.wikipedia.org/wiki/Remembrance_of_the_Dead
            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 05 && $this->day === 04;

        });

        Carbon::macro('isDutchNationalDay', function () {
            // Called "Koningsdag" of "Koninginnedag" in Dutch
            // since 2014 celebrated on April 27th. If the
            // day is on Sunday, we celebrate a day before.
            // https://en.wikipedia.org/wiki/Koningsdag
            if ($this->year < 1949) {
                return false;
            }

            $yearsWhereNationalDayIsOnSunday = [2014, 2025, 2031, 2036];
            if (in_array($this->year, $yearsWhereNationalDayIsOnSunday)) {
                if ($this->month === 4 && $this->day === 26) {
                    return true;
                }

                return false;
            }

            return ($this->year <= 2013 && $this->month === 04 && $this->day === 30) ||
                   ($this->year > 2013 && $this->month === 04 && $this->day === 27);
        });
    }
}
