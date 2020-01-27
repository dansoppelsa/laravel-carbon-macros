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
    }
}
