<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait ItalianDates
{
    public function registerItalianDates(): void
    {
        Carbon::macro('isLiberationDay', function () {
            // Liberation Day is a national holiday in Italy that commemorates the end of the fascist regime
            // and of the Nazi Germany occupation during World War II and the victory of the Resistance in Italy
            // https://en.wikipedia.org/wiki/Liberation_Day_(Italy)

            if ($this->year < 1946) {
                return false;
            }

            return $this->month === 4 && $this->day === 25;
        });

        Carbon::macro('isRepublicDay', function () {
            // Republic Day  is the Italian National Day and Republic Day, which is celebrated on 2 June each year
            // The day commemorates the institutional referendum held by universal suffrage in 1946,
            // in which the Italian people were called to the polls to decide on the form of government
            // following the Second World War and the fall of Fascism.
            // https://en.wikipedia.org/wiki/Festa_della_Repubblica

            if ($this->year < 1946) {
                return false;
            }

            return $this->month === 6 && $this->day === 2;
        });

        Carbon::macro('isImmaculateConceptionFeast', function () {
            // The feast day of the Immaculate Conception is December 8.
            // By Pontifical decree, it is the patronal feast day of America, Argentina, Brazil, Italy, Korea,
            // Nicaragua, Paraguay, the Philippines, Spain and Uruguay.
            // https://en.wikipedia.org/wiki/Feast_of_the_Immaculate_Conception

            return $this->month === 12 && $this->day === 8;
        });

        Carbon::macro('isAssumptionOfMaryFeast', function () {
            // Assumption Day on 15 August is a nationwide public holiday in Andorra, Austria, Belgium, [...], Italy
            // https://en.wikipedia.org/wiki/Assumption_of_Mary#Public_holidays

            return $this->month === 8 && $this->day === 15;
        });

        Carbon::macro('isEpiphany', function () {
            // In Italy, Epiphany is a national holiday and is associated with the figure of the Befana
            // (the name being a corruption of the word Epifania)
            // https://en.wikipedia.org/wiki/Epiphany_(holiday)#Italy

            return $this->month === 1 && $this->day === 6;
        });

        Carbon::macro('isSaintStephenDay', function () {
            // Saint Stephen's Day, also called the Feast of Saint Stephen, is a Christian saint's day
            // to commemorate Saint Stephen, the first Christian martyr, celebrated on 26 December
            // https://en.wikipedia.org/wiki/Saint_Stephen%27s_Day

            return $this->month === 12 && $this->day === 26;
        });

        Carbon::macro('isSaintSylvesterDay', function () {
            // In Italy, New Year's Eve (Italian: Vigilia di Capodanno or Notte di San Silvestro)
            // is celebrated by the observation of traditional rituals, such as wearing red underwear.
            // https://en.wikipedia.org/wiki/New_Year%27s_Eve#Italy

            return $this->month === 12 && $this->day === 31;
        });

        Carbon::macro('isWorkersDay', function () {
            // The first May Day celebration in Italy took place in 1890
            // It was abolished under the Fascist regime and immediately restored after the Second World War.
            // (During the fascist period, a "Holiday of the Italian Labour" was celebrated on 21 April)
            // https://en.wikipedia.org/wiki/International_Workers%27_Day#Europe
            // More precisely from 1924 to 1945 (source: https://it.wikipedia.org/wiki/Festa_dei_lavoratori#Durante_il_Fascismo)

            if ($this->year < 1890) {
                return false;
            }

            if (in_array($this->year, range(1924, 1945))) {
                return $this->month === 4 && $this->day === 21;
            }

            return $this->month === 5 && $this->day === 1;


        });

    }
}
