<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait IndonesianHolidays
{
    public function registerIndonesianHolidays()
    {
        Carbon::macro('isIndonesianIndependenceDay', function () {
            // https://en.wikipedia.org/wiki/Independence_Day_(Indonesia)
            return $this->month === 8 && $this->day === 17;
        });

        Carbon::macro('isPancasilaDay', function () {
            // https://www.officeholidays.com/holidays/indonesia/pancasila-day
            return $this->month === 6 && $this->day === 1;
        });

        Carbon::macro('isIndonesianLaborDay', function () {
            // https://www.timeanddate.com/holidays/indonesia/labor-day
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isKartiniDay', function () {
            // https://en.wikipedia.org/wiki/Kartini#Kartini_Day
            return $this->month === 4 && $this->day === 21;
        });

        Carbon::macro('isIndonesianEducationDay', function () {
            // https://en.wikipedia.org/wiki/Indonesia_National_Education_Day
            return $this->month === 5 && $this->day === 2;
        });

        Carbon::macro('isIndonesiaCustomerDay', function () {
            // https://www.kompas.com/tren/read/2020/09/04/121402665/sejarah-di-balik-penetapan-4-september-jadi-hari-pelanggan-nasional
            if ($this->year < 2003) {
                return false;
            }

            return $this->month === 9 && $this->day === 4;
        });

        Carbon::macro('isIndonesianHeroesDay', function () {
            // https://en.wikipedia.org/wiki/Heroes%27_Day#Indonesia
            return $this->month === 11 && $this->day === 10;
        });

        Carbon::macro('isIndonesianMothersDay', function () {
            // https://publicholidays.co.id/mothers-day/
            return $this->month === 12 && $this->day === 22;
        });
    }
}
