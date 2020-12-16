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
            // https://en.wikipedia.org/wiki/All_Saints%27_Day
            return $this->month === 11 && $this->day === 1;
        });

        Carbon::macro('isAscensionDay', function () {
            // Called "Ascension" in french
            // https://en.wikipedia.org/wiki/Ascension_of_Jesus
            return $this->clone()
                ->subDays(39)
                ->isEasterSunday();
        });

        Carbon::macro('isAssumptionDay', function () {
            // Called "Assomption" in french
            // https://en.wikipedia.org/wiki/Assumption_of_Mary
            return $this->month === 8 && $this->day === 15;
        });

        Carbon::macro('isEasterMonday', function () {
            // Called "Lundi de pâques" in french
            // https://en.wikipedia.org/wiki/Easter_Monday
            return $this->clone()
                ->subDays(1)
                ->isEasterSunday();
        });

        Carbon::macro('isFirstWarArmisticeDay', function () {
            // https://en.wikipedia.org/wiki/Armistice_Day
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
            // https://en.wikipedia.org/wiki/Pentecost
            return $this->clone()
                ->subDays(49)
                ->isEasterSunday();
        });

        Carbon::macro('isSecondWarArmisticeDay', function () {
            // https://en.wikipedia.org/wiki/Victory_in_Europe_Day
            if ($this->year < 1945) {
                return false;
            }

            return $this->month === 5 && $this->day === 8;

        });
    }
}
