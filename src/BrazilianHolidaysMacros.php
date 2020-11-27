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

            return $this->month === 4 && $this->day === 21;
        });

        Carbon::macro('isBrazilianLaborDay', function () {
            // The brazilian labor day differs from the Canadian one. In Brazil, labor day is celebrated on May 1st.

            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isBrazilianIndependenceDay', function () {
            // The Brazilian Independence was declared on September 7th 1822.

            return $this->month === 9 && $this->day === 7;
        });

        Carbon::macro('isTheDayOfOurLadyAparecida', function () {
            // The day of Our Lady Aparecida is observed every 12th of October celebrating the Patroness of Brazil,
            // the Virgin Mary (Our Lady Aparecida)

            return $this->month === 10 && $this->day === 12;
        });
    }
}
