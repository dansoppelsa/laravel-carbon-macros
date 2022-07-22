<?php

namespace CarbonMacros;

use CarbonMacros\Traits\UsDates;
use CarbonMacros\Traits\GeneralDates;
use CarbonMacros\Traits\CanadianDates;
use CarbonMacros\Traits\DutchHolidays;
use CarbonMacros\Traits\EgyptianHolidays;
use CarbonMacros\Traits\FrenchHolidays;
use CarbonMacros\Traits\GermanHolidays;
use CarbonMacros\Traits\IndianHolidays;
use CarbonMacros\Traits\KenyanHolidays;
use Illuminate\Support\ServiceProvider;
use CarbonMacros\Traits\ItalianHolidays;
use CarbonMacros\Traits\SwedishHolidays;
use CarbonMacros\Traits\ZambianHolidays;
use CarbonMacros\Traits\AlgerianHolidays;
use CarbonMacros\Traits\BrazilianHolidays;
use CarbonMacros\Traits\UkrainianHolidays;
use CarbonMacros\Traits\IndonesianHolidays;
use CarbonMacros\Traits\MultiNationalDates;

class CarbonMacrosServiceProvider extends ServiceProvider
{
    use MultiNationalDates;

    use AlgerianHolidays,
        BrazilianHolidays,
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

        $this->registerAlgerianHolidays();

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
