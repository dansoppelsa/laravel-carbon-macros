<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait AlgerianDates
{
    public function registerAlgerianDates(): void
    {
        // This Trait will only contain fixed holidays.
        // Since Algeria is a muslim country it has other Islamic holidays.
        // Holidays like Islamic New Year is occurs relative to the Islamic calendar, so it hasn't been added here.

        Carbon::macro('isAlgerianIndependenceDay', function () {
            // Algeria's Independence Day is on July 5, 1962
            // This holiday was established to celebrate the anniversary of Algeria's independence from France on July 5th 1962. 

            if ($this->year < 1962) {
                return false;
            }
            return $this->month === 7 && $this->day === 5;
        });

        Carbon::macro('isAlgerianRevolutionDay', function () {
            // It is celebrated on November 1st and commemorates the start of the war of independence against France

            if ($this->year < 1954) {
                return false;
            }
            return $this->month === 11 && $this->day === 1;
        });
        
        Carbon::macro('isAlgerianLaborDay', function () {
            // Algeria also celebrates Labor's day as well as other contries around the world on May 1st of each year.
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isAmazighNewYear', function () {
            // The Amazigh New Year or Yennayer is a public holiday in Algeria on January 12th.
            // It marks the start of the Berber (Amazigh) New Year. 
            // https://en.wikipedia.org/wiki/Yennayer
            // https://www.middleeasteye.net/discover/what-you-need-know-about-amazigh-new-year-or-yennayer
            
            return $this->month === 1 && $this->day === 12;
        });
    }
}
