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

        Carbon::macro('isKartiniDay', function () {
           return $this->month === 4 && $this->day === 21;
        });

        Carbon::macro('isIndonesiaEducationDay', function () {
           return $this->month === 5 && $this->day === 2;
        });

        Carbon::macro('isIndonesiaCustomerDay', function () {
           return $this->month === 9 && $this->day === 4;
        });

        Carbon::macro('isIndonesiaHeroDay', function () {
           return $this->month === 11 && $this->day === 10;
        });
    }
}
