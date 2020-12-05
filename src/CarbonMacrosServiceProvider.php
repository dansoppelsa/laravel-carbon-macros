<?php

namespace CarbonMacros;

use CarbonMacros\Traits\BrazilianHolidays;
use CarbonMacros\Traits\UkrainianHolidays;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class CarbonMacrosServiceProvider extends ServiceProvider
{
    use BrazilianHolidays,
        UkrainianHolidays;

    public function boot()
    {

    }

    public function register()
    {
        Carbon::macro('isNewYearsDay', function () {
            return $this->month === 1 && $this->day === 1;
        });

        Carbon::macro('isEasterSunday', function () {
            return $this->clone()
                ->setMonth(3)
                ->setDay(21)
                ->eq($this->clone()->subDays(easter_days($this->year)));
        });

        Carbon::macro('isGoodFriday', function () {
            return $this->clone()
                ->addDays(2)
                ->isEasterSunday();
        });

        Carbon::macro('isFamilyDay', function () {
            // Family Day was first observed anywhere in Canada in 1990 in Alberta
            // https://en.wikipedia.org/wiki/Family_Day_(Canada)
            if ($this->year < 1990) {
                return false;
            }

            if ($this->month !== 2) {
                return false;
            }

            // Third Monday in February
            return $this->clone()->nthOfMonth(3, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isVictoriaDay', function () {
            if ($this->month !== 5) {
                return false;
            }

            if ($this->day >= 25) {
                return false;
            }

            return $this->clone()->setDay(25)->previous(Carbon::MONDAY)->day == $this->day;
        });

        Carbon::macro('isCanadaDay', function () {
            return $this->month === 7 && $this->day === 1;
        });

        Carbon::macro('isLabourDay', function () {
            // Labour Day was first observed in Canada in 1894
            // https://www.timeanddate.com/holidays/canada/labour-day
            // https://en.wikipedia.org/wiki/Labour_Day
            if ($this->year < 1894) {
                return false;
            }

            return $this->month === 9 &&
                $this->clone()->firstOfMonth(static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isCanadianThanksgiving', function () {
            if ($this->year < 1957) {
                return false;
            }

            // Second Monday in October
            // https://www.statutoryholidays.com/
            // https://en.wikipedia.org/wiki/Thanksgiving_(Canada)
            return $this->month === 10 &&
                $this->clone()->firstOfMonth(Carbon::MONDAY)->addWeek()->day === $this->day;
        });

        Carbon::macro('isRemembranceDay', function () {
            // Remembrance Day was first observed officially in Canada in 1931
            // https://en.wikipedia.org/wiki/Remembrance_Day
            if ($this->year < 1931) {
                return false;
            }

            return $this->month === 11 && $this->day === 11;
        });

        Carbon::macro('isChristmasDay', function () {
            return $this->month === 12 && $this->day === 25;
        });

        Carbon::macro('isBoxingDay', function () {
            return $this->month === 12 && $this->day === 26;
        });

        Carbon::macro('isCivicHoliday', function () {
            if ($this->month !== 8) {
                return false;
            }

            return $this->clone()->firstOfMonth(static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isMlkJrDay', function () {
            // MLK Jr Day was first celebrated in  1986
            // https://en.wikipedia.org/wiki/Martin_Luther_King_Jr._Day
            if ($this->year < 1986) {
                return false;
            }

            if ($this->month !== 1) {
                return false;
            }

            // Third Monday in January
            return $this->clone()->nthOfMonth(3, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isIndependenceDay', function () {
            // Independence Day was first recognized in Massachusetts in 1781
            // https://en.wikipedia.org/wiki/Independence_Day_(United_States)
            if ($this->year < 1781) {
                return false;
            }

            return $this->month === 7 && $this->day === 4;
        });

        Carbon::macro('isMemorialDay', function () {
            // Memorial Day was first observed in 1874
            // https://en.wikipedia.org/wiki/Memorial_Day
            if ($this->year < 1874) {
                return false;
            }

            if ($this->month !== 5) {
                return false;
            }

            return $this->clone()->lastOfMonth(static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isLaborDay', function () {
            return $this->isLabourDay();
        });

        Carbon::macro('isVeteransDay', function () {
            // Veterans Day was first celebrated in 1954
            // https://en.wikipedia.org/wiki/Veterans_Day
            if ($this->year < 1954) {
                return false;
            }

            return $this->month === 11 && $this->day === 11;
        });

        Carbon::macro('isAmericanThanksgiving', function () {
            // US Thanksgiving is believed to have first been celebrated in 1621
            // https://en.wikipedia.org/wiki/Thanksgiving_(United_States)
            if ($this->year < 1789) {
                return false;
            }

            return $this->clone()->nthOfMonth(4, static::THURSDAY)->day === $this->day;
        });

        Carbon::macro('isPresidentsDay', function () {
            // Presidents Day was first celebrated in 1880
            // https://www.timeanddate.com/holidays/us/washington-birthday
            if ($this->year < 1880) {
                return false;
            }

            if ($this->month !== 2) {
                return false;
            }

            return $this->clone()->nthOfMonth(3, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isColumbusDay', function () {
            // Columbus Day was first celebrated in 1868
            // https://www.timeanddate.com/holidays/us/columbus-day
            if ($this->year < 1869) {
                return false;
            }

            return $this->clone()->nthOfMonth(2, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isNewYearsEve', function () {
            return $this->month === 12 && $this->day === 31;
        });

        $this->registerBrazilianHolidays();

        $this->registerUkrainianHolidays();
    }
}
