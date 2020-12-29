<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait IndianHolidays
{

    public function registerIndianHolidays()
    {
        Carbon::macro('isIndianRepublicDay', function () {
            // https://en.wikipedia.org/wiki/Public_holidays_in_India

            if ($this->year < 1950) {
                return false;
            }
            return $this->month === 1 && $this->day === 26;
        });

        Carbon::macro('isIndianIndependenceDay', function () {
            // https://en.wikipedia.org/wiki/Public_holidays_in_India

            if ($this->year < 1947) {
                return false;
            }
            return $this->month === 8 && $this->day === 15;
        });

        Carbon::macro('isGandhiJayanti', function () {
            // https://en.wikipedia.org/wiki/Public_holidays_in_India

            if ($this->year < 1869) {
                return false;
            }
            return $this->month === 10 && $this->day === 2;
        });


    }
}