<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait DutchDates
{
    public function registerDutchDates(): void
    {
        Carbon::macro('isDutchLiberationDay', function () {
            // Called "Bevrijdingsdag" in Dutch
            // https://en.wikipedia.org/wiki/Liberation_Day_(Netherlands)
            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 5 && $this->day === 5;
        });

        Carbon::macro('isSaintNicholasEve', function () {
            // Called "Sinterklaas" in Dutch
            // https://en.wikipedia.org/wiki/Sinterklaas
            return $this->month === 12 && $this->day === 5;
        });

        Carbon::macro('isDutchRemembranceDay', function () {
            // https://en.wikipedia.org/wiki/Remembrance_of_the_Dead
            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 5 && $this->day === 4;
        });

        Carbon::macro('isDutchNationalDay', function () {
            // Called "Koningsdag" of "Koninginnedag" in Dutch
            // since 2014 celebrated on April 27th. If the
            // day is on Sunday, we celebrate a day before.
            // https://en.wikipedia.org/wiki/Koningsdag
            if ($this->year < 1949) {
                return false;
            }

            if ($this->year < 2014) {
                return $this->month === 4 && $this->day === 30;
            }

            if ($this->dayOfWeek === Carbon::SUNDAY) {
                return false;
            }

            if ($this->month === 4 && $this->day === 26) {
                return $this->dayOfWeek === Carbon::SATURDAY;
            }

            return $this->month === 4 && $this->day === 27;
        });
    }
}
