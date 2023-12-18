<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait PolishDates
{
    public function registerPolishDates(): void
    {
        Carbon::macro('isPolishIndependenceDay', function () {
            if ($this->year < 1989) {
                return false;
            }

            return $this->month === 11 && $this->day === 11;
        });


        Carbon::macro('isPolishConstitutionDay', function () {

            if ($this->year < 1990) {
                return false;
            }

            return $this->month === 5 && $this->day === 3;
        });

        Carbon::macro('isPolishLabourDay', function () {
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isEpiphany', function () {
            // In Poland, Epiphany is a national holiday since 2011

            if ($this->year < 2011) {
                return false;
            }

            return $this->month === 1 && $this->day === 6;
        });


        Carbon::macro('isPolishArmedForcesDay', function () {
            // Armed Forces Day is a national holiday celebrated annually on 15 August in Poland, 
            // commemorating the anniversary of the 1920 victory over Soviet Russia at the Battle of Warsaw during the Polish–Soviet War.

            if ($this->year < 1992) {
                return false;
            }

            return $this->month === 8 && $this->day === 15;
        });
    }
}