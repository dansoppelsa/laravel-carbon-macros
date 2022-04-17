<?php

namespace CarbonMacros;

use CarbonMacros\Traits\BrazilianHolidays;
use CarbonMacros\Traits\CanadianDates;
use CarbonMacros\Traits\DutchHolidays;
use CarbonMacros\Traits\EgyptianHolidays;
use CarbonMacros\Traits\FrenchHolidays;
use CarbonMacros\Traits\GeneralDates;
use CarbonMacros\Traits\GermanHolidays;
use CarbonMacros\Traits\IndianHolidays;
use CarbonMacros\Traits\IndonesianHolidays;
use CarbonMacros\Traits\ItalianHolidays;
use CarbonMacros\Traits\KenyanHolidays;
use CarbonMacros\Traits\MultiNationalDates;
use CarbonMacros\Traits\SwedishHolidays;
use CarbonMacros\Traits\UkrainianHolidays;
use CarbonMacros\Traits\UsDates;
use CarbonMacros\Traits\ZambianHolidays;
use Illuminate\Support\ServiceProvider;

class CarbonMacrosServiceProvider extends ServiceProvider
{
    use MultiNationalDates;

    use BrazilianHolidays,
        CanadianDates,
        EgyptianHolidays,
        FrenchHolidays,
        GermanHolidays,
        IndianHolidays,
        IndonesianHolidays,
        ItalianHolidays,
        KenyanHolidays,
        SwedishHolidays,
        DutchHolidays,
        UkrainianHolidays,
        UsDates,
        ZambianHolidays;

    public function boot()
    {
    }

    public function register()
    {
        $this->registerMultinationalDates();

        $this->registerBrazilianHolidays();

        $this->registerCanadianDates();

        $this->registerDutchHolidays();

        $this->registerEgyptianDates();

        $this->registerFrenchHolidays();

        $this->registerGermanHolidays();

        $this->registerIndianHolidays();

        $this->registerIndonesianHolidays();

        $this->registerItalianHolidays();

        $this->registerKenyanHolidays();

        $this->registerSwedishHolidays();

        $this->registerUsDates();

        $this->registerUkrainianHolidays();

        $this->registerZambianHolidays();
    }
}
