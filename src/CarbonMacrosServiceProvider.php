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
    }
}
