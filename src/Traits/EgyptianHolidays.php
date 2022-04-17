<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait EgyptianHolidays
{
    // https://en.wikipedia.org/wiki/Public_holidays_in_Egypt#National_holidays

    // This Trait will only contain fixed holidays as movable
    // holidays like Islamic New Year is occurs relative to
    // Islamic calendar, or may move to the end of the week

    public function registerEgyptianDates()
    {
        Carbon::macro('isEgyptianChristmasDay', function () {
            /**  @var Carbon $this */

            return $this->month === 1 && $this->day === 7;
        });

        Carbon::macro('isEgyptian2011RevolutionDay', function () {
            /**  @var Carbon $this */

            // Celebrates the day of the beginning of the
            // Egyptian revolution of 2011, protesting
            // the 29-year rule of Hosni Mubarak.
            if ($this->year < 2011) {
                return false;
            }

            return $this->month === 1 && $this->day === 25;
        });

        // 2011 Revloution days is the same as National Police Day
        Carbon::macro('isEgyptianNationalPoliceDay', function () {
            /**  @var Carbon $this */

            // Celebrates the anniversary of Police officers
            // resistance against the British Army in 1952
            // during the final months of the colonial era.
            if ($this->year < 1952) {
                return false;
            }

            return $this->month === 1 && $this->day === 25;
        });


        Carbon::macro('isEgyptianSinaLiberationDay', function () {
            /**  @var Carbon $this */

            // Celebrates the final withdrawal of all Israeli military
            // forces from the Sinai Peninsula in 1982.
            if ($this->year < 1982) {
                return false;
            }

            return $this->month === 4 && $this->day === 25;
        });


        Carbon::macro('isEgyptianLabourDay', function () {
            /**  @var Carbon $this */

            return $this->month === 5 && $this->day === 1;
        });


        Carbon::macro('isEgyptian30JuneRevolutionDay', function () {
            /**  @var Carbon $this */

            // Observes the June 2013 Egyptian protests,
            // which saw President Mohamed Morsi deposed
            // by the military a few days later.

            if ($this->year < 2013) {
                return false;
            }
            return $this->month === 6 && $this->day === 30;
        });


        Carbon::macro('isEgyptian23JulyRevolutionDay', function () {
            /**  @var Carbon $this */

            // Celebrates the Egyptian Revolution of 1952 which led
            // to the declaration of the modern republic of Egypt.
            // This is considered the National Day of Egypt.
            if ($this->year < 1952) {
                return false;
            }
            return $this->month === 7 && $this->day === 23;
        });


        Carbon::macro('isEgyptian6OctoberVictoryDay', function () {
            /**  @var Carbon $this */

            // Celebrates Egypt's initial military success in the
            // October War which led to the liberation of the land of
            // Sinai from occupation back to Egyptian sovereignty.
            if ($this->year < 1973) {
                return false;
            }
            return $this->month === 10 && $this->day === 6;
        });
    }
}
