<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait TunisiaDates
{
    public function registerTunisianDates(): void
    {
        Carbon::macro('isTunisianIndependenceDay', function () {
            // Tunisian's Independence Day is on March 20, 1956

            if ($this->year < 1956) {
                return false;
            }

            return $this->month === 3 && $this->day === 20;
        });

        Carbon::macro('isTunisianMartyrsDay', function () {
            /*On April 9 of each year, Tunisia celebrates Martyrs' Day to honor those who fought and were martyred
            in the war of independence between 1952 and 1956.
            */
            if ($this->year < 1956) {
                return false;
            }

            return $this->month === 4 && $this->day === 9;
        });

        Carbon::macro('isLabourDay', function () {
           //First of May

            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isRepublicDay', function () {
            // Tunisian's Republic Day is on July 25, 1956
            if ($this->year < 1956) {
                return false;
            }

            return $this->month === 7 && $this->day === 25;
        });

        Carbon::macro('isWomensDay', function () {
            // Tunisians celebrate women's day on August, 13 since 1993
            if ($this->year < 1993) {
                return false;
            }

            return $this->month === 8 && $this->day === 13;
        });

        Carbon::macro('isEvacuationDay', function () {
            // Tunisian's Evacuation Day is on October 15, 1963
            if ($this->year < 1963) {
                return false;
            }

            return $this->month === 10 && $this->day === 15;
        });

        Carbon::macro('isRevolutionAndYouthDay', function () {
            // Tunisians celebrate women's day on December, 17 since 2011
            if ($this->year < 2011) {
                return false;
            }

            return $this->month === 12 && $this->day === 17;
        });
    }
}