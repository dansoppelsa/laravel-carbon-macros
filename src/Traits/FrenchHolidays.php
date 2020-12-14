<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait FrenchHolidays
{
    /**
     *
     */
    public function registerFrenchHolidays()
    {
        Carbon::macro('isAllSaintsDay', function () {
            // Called "Toussaint" in french
            return $this->month === 11 && $this->day === 1;
        });

        Carbon::macro('isAscensionDay', function () {
            // Called "Ascension" in french
            return $this->clone()
                ->subDays(40)
                ->isEasterSunday();
        });

        Carbon::macro('isAssumptionDay', function () {
            // Called "Assomption" in french
            return $this->month === 8 && $this->day === 15;
        });

        Carbon::macro('isEasterMonday', function () {
            return $this->clone()
                ->subDays(1)
                ->isEasterSunday();
        });

        Carbon::macro('isFirstWarArmisticeDay', function () {
            if ($this->year < 1918) {
                return false;
            }

            return $this->month === 11 && $this->day === 11;

        });

        Carbon::macro('isFrenchNationalDay', function () {
            // https://fr.wikipedia.org/wiki/F%C3%AAte_nationale_fran%C3%A7aise
            if ($this->year < 1880) {
                return false;
            }

            return $this->month === 07 && $this->day === 14;
        });

        Carbon::macro('isPentecostDay', function () {
            // Called "Pentecôte" in french
            return $this->clone()
                ->subDays(50)
                ->isEasterSunday();
        });

        Carbon::macro('isSecondWarArmisticeDay', function () {
            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 11 && $this->day === 8;
        });
    }
}
