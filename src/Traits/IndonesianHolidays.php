<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait IndonesianHolidays
{
    public function registerIndonesianHolidays() {
        Carbon::macro('isIndonesiaIndependenceDay', function () {
            return $this->month === 8 && $this->day === 17;
        });

        Carbon::macro('isPancasilaDay', function () {
            return $this->month === 6 && $this->day === 1;
        });

        Carbon::macro('isIndonesiaLaborDay', function () {
           return $this->month === 2 && $this->day === 20;
        });
    }
}
