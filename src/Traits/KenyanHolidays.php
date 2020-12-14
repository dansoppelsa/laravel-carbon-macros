<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait KenyanHolidays
{
    public function registerKenyanHolidays()
    {
        Carbon::macro('isKenyanIndependenceDay', function () {
            // This celebrates the day Kenya changed from being an Empire to a Republic, which was on 12 December 1963.

            if ($this->year < 1963) {
                return false;
            }

            return $this->month === 12 && $this->day === 12;
        });

        Carbon::macro('isKenyanJamhuriDay', function () {
            // This is the local name for Independence Day

            if ($this->year < 1963) {
                return false;
            }

            return $this->month === 12 && $this->day === 12;
        });

        Carbon::macro('isKenyanLabourDay', function () {
            // International Workers' Day, also known as Labour Day in most countries 
            // and often referred to as May Day, is a celebration of labourers and the working classes 
            // that is promoted by the international labour movement and occurs every year on May Day.


            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isKenyanMadarakaDay', function () {
            // It commemorates the day in 1963 that Kenya attained internal self rule 
            // after being a British colony since 1920. It is celebrated on every 1st of June

            if ($this->year < 1920) {
                return false;
            }

            return $this->month === 6 && $this->day === 1;
        });

        Carbon::macro('isKenyanHudumaDay', function () {
            // Formerly known as Moi Day, it is a public holiday in Kenya celebrated every 10th of October.

            return $this->month === 10 && $this->day === 10;
        });

        Carbon::macro('isKenyanMashujaaDay', function () {
            // Heroes' Day or National Heroes' Day may refer to a number of commemorations of national heroes 
            // in different countries. It is often held on the birthday of a national hero or heroine, 
            // or the anniversary of their great deeds that made them heroes.
            // It is celebrated on every 20th of October.

            return $this->month === 10 && $this->day === 20;
        });

        Carbon::macro('isKenyanUtamaduniDay', function () {
            // Also internationally know as Boxing Day. It is celebrated every year after the Christmas day.

            return $this->month === 12 && $this->day === 26;
        });

    }
}
