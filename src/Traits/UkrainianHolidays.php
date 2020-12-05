<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait UkrainianHolidays
{
    public function registerUkrainianHolidays()
    {
        Carbon::macro('isUkrainianIndependenceDay', function () {
            if ($this->year < 1991) {
                return false;
            }

            return $this->month === 8 && $this->day === 24;
        });

        Carbon::macro('isUkraineDefenderDay', function () {
            // Defender of Ukraine Day is a state holiday in Ukraine celebrated annually on 14 October.
            // Its first celebration was in 2015. Starting from 2015, this day is considered a public holiday.

            if ($this->year < 2015) {
                return false;
            }

            return $this->month === 10 && $this->day === 14;
        });

        Carbon::macro('isUkrainianConstitutionDay', function () {
            // It commemorates the anniversary of the approval by the Verkhovna Rada of the Constitution
            // of Ukraine on 28 June 1996.

            if ($this->year < 1996) {
                return false;
            }

            return $this->month === 6 && $this->day === 28;
        });

        Carbon::macro('isUkrainianLabourDay', function () {
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isUkraineDefenderDay', function () {
            // This holiday honours and pays tribute to all those who have fought and continue
            // to fight for the state sovereignty of Ukraine. Its first celebration was in 2015.

            if ($this->year < 2015) {
                return false;
            }

            return $this->month === 10 && $this->day === 14;
        });

        Carbon::macro('isKupalaNight', function () {
            // The celebration relates to the summer solstice when nights are the shortest and includes
            // a number of Slavic rituals. In Eastern Slavic countries it is celebrated according to traditional
            // Julian calendar on the night between 6 to 7 July.

            return $this->month === 7 && ($this->day === 6 || $this->day === 7);
        });

        Carbon::macro('isVictoryDayOverNazism', function () {
            // Victory Day over Nazism in World War II or Victory Day is a national holiday and a day off in Ukraine.
            // It was first celebrated on 9 May 2015 and follows the Day of Remembrance and Reconciliation on May 8
            // The holiday replaced the Soviet Union/Russian Federation "Victory Day", which was celebrated in the
            // post-Soviet Union states, including Ukraine, until 2014 inclusive.

            if ($this->year < 2015) {
                return false;
            }

            return $this->month === 5 && $this->day === 9;
        });
    }
}