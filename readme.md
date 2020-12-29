# Laravel Carbon Macros

![Packagist Version](https://img.shields.io/packagist/v/dansoppelsa/laravel-carbon-macros) ![GitHub Main Workflow Status](https://img.shields.io/github/workflow/status/dansoppelsa/laravel-carbon-macros/Tests/master) ![Packagist License](https://img.shields.io/packagist/l/dansoppelsa/laravel-carbon-macros) ![GitHub Contributors](https://img.shields.io/github/contributors/dansoppelsa/laravel-carbon-macros)

A handy collection of international `Illuminate\Support\Carbon` date helpers

## Available Methods

### US Dates 🇺🇸
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

### Canadian Dates 🇨🇦
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

- [Brazil](./docs/brazil.md) 🇧🇷
- [France](docs/france.md) 🇫🇷
- [Germany](./docs/germany.md) 🇩🇪
- [India](./docs/india.md) 🇮🇳
- [Indonesia](./docs/indonesia.md) 🇮🇩
- [Italy](./docs/italy.md) 🇮🇹
- [Kenya](./docs/kenya.md) 🇰🇪
- [Netherlands](./docs/netherlands.md) 🇳🇱
- [Sweden](./docs/sweden.md) 🇸🇪
- [Ukraine](./docs/ukraine.md) 🇺🇦
- [Zambia](./docs/zambia.md) 🇿🇲


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
