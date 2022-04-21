<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait AlgerianHolidays
{
    /**
     *
     */
    public function registerAlgerianHolidays()
    {
        
		Carbon::macro('isAlgerianVictoriaDay', function () {
			if ($this->year < 1962) {
                return false;
            }
            return $this->month == 3 && $this->day >= 19; 
               
        });
		
        Carbon::macro('IsAlgerianIndependenceDay', function () {
            // https://en.wikipedia.org/wiki/Independence_Day_(Algeria)
            if ($this->year < 1962) {
                return false;
            }

            return $this->month === 7 && $this->day === 8;

        });
    }
}
