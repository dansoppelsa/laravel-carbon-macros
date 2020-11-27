<?php namespace CarbonMacros;

use Illuminate\Support\Carbon;

trait BrazilianHolidaysMacros
{
    public function registerBrazilianHolidays()
    {
        Carbon::macro('isTiradentesDay', function () {
            // Tiradentes' Day is a National Holiday to pay respects to "Joaquim José da Silva Xavier (aka: Tiradentes).
            // Tiradentes lead a revolution against the Portuguese Crown in 1789.
            // This holiday is celebrated every year on April 21st (the day of his execution)

            return $this->month === 04 && $this->day === 21;
        });
    }
}
