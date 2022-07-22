<?php

namespace CarbonMacros\Traits;

use Illuminate\Support\Carbon;

trait GermanDates
{
    public function registerGermanDates(): void
    {
        Carbon::macro('isGermanLabourDay', function () {
            /*
             * The german labour day differs from the Canadian one.
             * In Germany, labour day is celebrated on May 1st.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            return $this->month === 5 && $this->day === 1;
        });

        Carbon::macro('isAscensionOfJesus', function () {
            /*
             * Ascension Day, in the Christian faith, signifies the return
             * of Jesus Christ as the Son of God to His Father in heaven.
             * Ascension Day is celebrated on the 40th day of the Easter
             * season, 39 days after Easter Sunday. Therefore, the feast
             * always falls on a Thursday.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            return $this->clone()
                ->subDays(39)
                ->isEasterSunday();
        });

        Carbon::macro('isWhitSunday', function () {
            /*
             * The Christian holiday of Pentecost or Whitsunday is celebrated
             * the 50th day (the seventh Sunday) from Easter Sunday.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            return $this->clone()
                ->subDays(49)
                ->isEasterSunday();
        });

        Carbon::macro('isWhitsun', function () {
            return $this->isWhitSunday();
        });

        Carbon::macro('isPentecost', function () {
            return $this->isWhitSunday();
        });

        Carbon::macro('isPentecostSunday', function () {
            return $this->isWhitSunday();
        });

        Carbon::macro('isWhitMonday', function () {
            /*
             * Whit Monday is the holiday celebrated the day after Pentecost.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            return $this->clone()
                ->subDays(1)
                ->isWhitSunday();
        });

        Carbon::macro('isPentecostMonday', function () {
            return $this->isWhitMonday();
        });

        Carbon::macro('isCorpusChristi', function () {
            /*
             * In Germany, Corpus Christi is a public holiday in some states.
             * It takes place 60 days after Easter Sunday.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            return $this->clone()
                ->subDays(60)
                ->isEasterSunday();
        });

        Carbon::macro('isGermanUnityDay', function () {
            /*
             * German Unity Day (German: Tag der Deutschen Einheit) is the
             * National Day in Germany, celebrated on 3 October as a public holiday.
             * It commemorates German reunification in 1990 when the Federal Republic
             * of Germany (West Germany) and the German Democratic Republic
             * (East Germany) were unified, so that for the first time since 1945
             * there existed a single German state. German Unity Day on 3 October
             * has been the German National Holiday since 1990, when the
             * reunification was formally completed.
             * https://en.wikipedia.org/wiki/Public_holidays_in_Germany
             */
            if ($this->year < 1990) {
                return false;
            }

            return $this->month === 10 && $this->day === 3;
        });

        Carbon::macro('isHeiligerAbend', function () {
            /*
             * Germans celebrate Christmas Eve (German: Heiliger Abend, Heiligabend),
             * Christmas Day is just another holiday.
             */
            return $this->isChristmasEve();
        });

        Carbon::macro('isHeiligAbend', function () {
            return $this->isHeiligerAbend();
        });
    }
}
