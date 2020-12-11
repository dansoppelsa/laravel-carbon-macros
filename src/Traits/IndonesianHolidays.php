<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait IndonesianHolidays
{
    public function registerIndonesianHolidays() {
        Carbon::macro('isIndonesiaIndependenceDay', function () {
            return $this->month === 8 && $this->day === 17;
        });
    }
}
