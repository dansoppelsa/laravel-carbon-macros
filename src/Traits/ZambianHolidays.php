<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait ZambianHolidays
{
    public function registerZambianHolidays()
    {
        Carbon::macro('isZambianIndependenceDay', function () {
            // This holiday marks independence from the United Kingdom on 24th October 1964.
            // https://www.officeholidays.com/holidays/zambia/zambia-independence-day
            if ($this->year < 1964) {
                return false;
            }

            return $this->month === 10 && $this->day === 24;
        });

        Carbon::macro('isZambianLabourDay', function () {
            // International Workers' Day, also known as Labour Day in most countries
            // and often referred to as May Day, is a celebration of labourers and the working classes
            // that is promoted by the international labour movement and occurs every year on May Day.
            // https://www.officeholidays.com/holidays/zambia/labour-day
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isZambianYouthDay', function () {
            // This holiday highlights the importance of the youth to the country
            // on the anniversary of disturbances in 1962 that resulted in the deaths
            // of young Zambians during the nation's turbulent journey to independence.
            // https://www.officeholidays.com/holidays/zambia/zambia-youth-day
            if ($this->year < 1966) {
                return false;
            }

            return $this->month === 3 && $this->day === 12;
        });

        Carbon::macro('isZambianWomensDay', function () {
            // International Women's Day is celebrated on March 8th.
            // https://www.officeholidays.com/holidays/zambia/international-womens-day
            if ($this->year < 1977) {
                return false;
            }

            if ($this->month !== 3) {
                return false;
            }

            if ($this->day < 8 || $this->day > 10) {
                return false;
            }

            $womensDay = Carbon::create($this->year, 3, 8);

            if ($womensDay->isSaturday()) {
                return $this->month === 3 && $this->day === $womensDay->addDays(2)->day;
            }

            if ($womensDay->isSunday()) {
                return $this->month === 3 && $this->day === $womensDay->addDay()->day;
            }

            return $this->month === 3 && $this->day === 8;
        });

        Carbon::macro('isZambianAfricanUnityDay', function () {
            // African Unity Day, also known as Africa day is celebrated annually on May 25th.
            // It commemorates the founding of the Organisation of African Unity (OAU) on this day in 1963.
            // https://www.officeholidays.com/holidays/zambia/african-unity-day
            if ($this->year < 1963) {
                return false;
            }

            return $this->month === 5 && $this->day === 25;
        });

        Carbon::macro('isZambianAfricaDay', function () {
            // This is the alternative name for Africa Unity Day
            return $this->isZambianAfricanUnityDay();
        });

        Carbon::macro('isZambianHeroesDay', function () {
            // This day remembers those Zambians who perished during Zambia's long struggle for independence.
            // The day always forms part of a two-day break as Heroes' Day is immediately followed by Unity Day.
            // https://www.officeholidays.com/holidays/zambia/zambia-heroes-day
            if ($this->year < 1964) {
                return false;
            }

            if ($this->month !== 7) {
                return false;
            }

            return $this->clone()->nthOfMonth(1, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isZambianUnityDay', function () {
            // The day always forms part of a two-day break as Unity Day always take place on the day after Heroes' Day.
            // https://www.officeholidays.com/holidays/zambia/zambia-unity-day
            if ($this->year < 1964) {
                return false;
            }

            if ($this->month !== 7) {
                return false;
            }

            return $this->clone()->nthOfMonth(1, static::MONDAY)->addDay()->day === $this->day;
        });

        Carbon::macro('isZambianFarmersDay', function () {
            // This is a day to celebrate the contribution and work of the agricultural sector in Zambia.
            // https://www.officeholidays.com/holidays/zambia/zambia-farmers-day
            if ($this->year < 1964) {
                return false;
            }

            if ($this->month !== 8) {
                return false;
            }

            return $this->clone()->nthOfMonth(1, static::MONDAY)->day === $this->day;
        });

        Carbon::macro('isZambianNationalPrayerDay', function () {
            // This aim of this holiday is as a day for national prayer, fasting, repentance and reconciliation.
            // https://www.officeholidays.com/holidays/zambia/national-prayer-day
            if ($this->year < 2015) {
                return false;
            }

            if ($this->month !== 10) {
                return false;
            }

            return $this->month === 10 && $this->day === 18;
        });
    }
}
