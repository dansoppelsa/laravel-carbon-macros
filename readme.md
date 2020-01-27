# Laravel Carbon Macros

A handy collection of `Illuminate\Support\Carbon` date helpers

## Available Methods

### US Dates
- isNewYearsDay
- isMlkJrDay
- isGoodFriday
- isEasterSunday
- isMemorialDay
- isIndependenceDay
- isLaborDay
- isVeteransDay
- isAmericanThanksgiving
- isChristmasDay

### Canadian Dates
- isNewYearsDay
- isFamilyDay
- isGoodFriday
- isEasterSunday
- isVictoriaDay
- isCanadaDay
- isCivicHoliday
- isLabourDay
- isCanadianThanksgiving
- isRemembranceDay
- isChristmasDay
- isBoxingDay


## Installation
#### Install via composer
```
composer require dansoppelsa/carwash
```

## Usage
```php
<?php

use Illuminate\Support\Carbon;


$day = Carbon::parse('2020-12-25');

$day->isChristmas();
// true

$day->isNewYearsDay();
// false
``` 
