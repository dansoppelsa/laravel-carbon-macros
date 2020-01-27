<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class CarbonMacrosServiceProvider extends ServiceProvider
{
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
        Carbon::macro('isCanadaDay', function () {
            return  $this->month === 7 && $this->day === 1;
        });

        Carbon::macro('isLabourDay', function () {
            // Labour Day was first observed in Canada in 1894
            // https://www.timeanddate.com/holidays/canada/labour-day
            // https://en.wikipedia.org/wiki/Labour_Day
            if ($this->year < 1894) {
                return false;
            }

            return  $this->month === 9 &&
                $this->clone()->firstOfMonth(static::MONDAY)->day === $this->day;
        });
        Carbon::macro('isCanadianThanksgiving', function () {
            if ($this->year < 1957) {
                return false;
            }

            // Second Monday in October
            // https://www.statutoryholidays.com/
            // https://en.wikipedia.org/wiki/Thanksgiving_(Canada)
            return  $this->month === 10 &&
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
    }
}
