<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait UsDates
{
    public function registerUsDates(): void
    {
        Carbon::macro('isMlkJrDay', function () {
            // MLK Jr Day was first celebrated in  1986
            // https://en.wikipedia.org/wiki/Martin_Luther_King_Jr._Day
            if ($this->year < 1986) {
                return false;
            }

            if ($this->month !== 1) {
                return false;
            }

            // Third Monday in January
            return $this->clone()->nthOfMonth(3, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isIndependenceDay', function () {
            // Independence Day was first recognized in Massachusetts in 1781
            // https://en.wikipedia.org/wiki/Independence_Day_(United_States)
            if ($this->year < 1781) {
                return false;
            }

            return $this->month === 7 && $this->day === 4;
        });

        Carbon::macro('isMemorialDay', function () {
            // Memorial Day was first observed in 1874
            // https://en.wikipedia.org/wiki/Memorial_Day
            if ($this->year < 1874) {
                return false;
            }

            if ($this->month !== 5) {
                return false;
            }

            return $this->clone()->lastOfMonth(static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isLaborDay', function () {
            return $this->isLabourDay();
        });

        Carbon::macro('isVeteransDay', function () {
            // Veterans Day was first celebrated in 1954
            // https://en.wikipedia.org/wiki/Veterans_Day
            if ($this->year < 1954) {
                return false;
            }

            return $this->month === 11 && $this->day === 11;
        });

        Carbon::macro('isAmericanThanksgiving', function () {
            // US Thanksgiving is believed to have first been celebrated in 1621
            // https://en.wikipedia.org/wiki/Thanksgiving_(United_States)
            if ($this->year < 1789) {
                return false;
            }

            return $this->clone()->nthOfMonth(4, static::THURSDAY)->day === $this->day;
        });

        Carbon::macro('isPresidentsDay', function () {
            // Presidents Day was first celebrated in 1880
            // https://www.timeanddate.com/holidays/us/washington-birthday
            if ($this->year < 1880) {
                return false;
            }

            if ($this->month !== 2) {
                return false;
            }

            return $this->clone()->nthOfMonth(3, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isColumbusDay', function () {
            // Columbus Day was first celebrated in 1868
            // https://www.timeanddate.com/holidays/us/columbus-day
            if ($this->year < 1869) {
                return false;
            }

            return $this->clone()->nthOfMonth(2, static::MONDAY)->day === $this->day;
        });
    }
}