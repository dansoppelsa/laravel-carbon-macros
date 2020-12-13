# Laravel Carbon Macros

A handy collection of `Illuminate\Support\Carbon` date helpers

## Available Methods

### US Dates
- isNewYearsDay
- isMlkJrDay
- isPresidentsDay
- isGoodFriday
- isEasterSunday
- isMemorialDay
- isIndependenceDay
- isLaborDay
- isColumbusDay
- isVeteransDay
- isAmericanThanksgiving
- isChristmasDay
- isNewYearsEve

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
- isNewYearsEve

### Other Dates

- [Brazil](./docs/brazil.md)
- [Ukraine](./docs/ukraine.md)
- [Italy](./docs/italy.md)


## Installation
#### Install via composer
```
composer require dansoppelsa/laravel-carbon-macros
```

## Usage
```php
<?php

use Illuminate\Support\Carbon;


$day = Carbon::parse('2020-12-25');

$day->isChristmasDay();
// true

$day->isNewYearsDay();
// false
``` 
