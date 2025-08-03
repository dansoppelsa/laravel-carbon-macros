<?php

namespace CarbonMacros;

use CarbonMacros\Traits\AlgerianDates;
use CarbonMacros\Traits\BrazilianDates;
use CarbonMacros\Traits\CanadianDates;
use CarbonMacros\Traits\DutchDates;
use CarbonMacros\Traits\EgyptianDates;
use CarbonMacros\Traits\FrenchDates;
use CarbonMacros\Traits\GermanDates;
use CarbonMacros\Traits\IndianDates;
use CarbonMacros\Traits\IndonesianDates;
use CarbonMacros\Traits\ItalianDates;
use CarbonMacros\Traits\KenyanDates;
use CarbonMacros\Traits\MultiNationalDates;
use CarbonMacros\Traits\NorthMacedonianDates;
use CarbonMacros\Traits\PolishDates;
use CarbonMacros\Traits\SwedishDates;
use CarbonMacros\Traits\UkrainianDates;
use CarbonMacros\Traits\UsDates;
use CarbonMacros\Traits\ZambianDates;
use Illuminate\Support\ServiceProvider;

class CarbonMacrosServiceProvider extends ServiceProvider
{
    use MultiNationalDates;

    use AlgerianDates,
        BrazilianDates,
        CanadianDates,
        DutchDates,
        EgyptianDates,
        FrenchDates,
        GermanDates,
        IndianDates,
        IndonesianDates,
        ItalianDates,
        KenyanDates,
        NorthMacedonianDates,
        PolishDates,
        SwedishDates,
        UkrainianDates,
        UsDates,
        ZambianDates;

    public function boot()
    {
    }

    public function register()
    {
        $this->registerMultinationalDates();

        $this->registerAlgerianDates();

        $this->registerBrazilianDates();

        $this->registerCanadianDates();

        $this->registerDutchDates();

        $this->registerEgyptianDates();

        $this->registerFrenchDates();

        $this->registerGermanDates();

        $this->registerIndianDates();

        $this->registerIndonesianDates();

        $this->registerItalianDates();

        $this->registerKenyanDates();

        $this->registerNorthMacedonianDates();

        $this->registerPolishDates();

        $this->registerSwedishDates();

        $this->registerUsDates();

        $this->registerUkrainianDates();

        $this->registerZambianDates();
    }
}
