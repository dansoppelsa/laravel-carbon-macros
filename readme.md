# Laravel Carbon Macros

![Packagist Version](https://img.shields.io/packagist/v/dansoppelsa/laravel-carbon-macros) ![GitHub Main Workflow Status](https://img.shields.io/github/workflow/status/dansoppelsa/laravel-carbon-macros/Tests/master) ![Packagist License](https://img.shields.io/packagist/l/dansoppelsa/laravel-carbon-macros) ![GitHub Contributors](https://img.shields.io/github/contributors/dansoppelsa/laravel-carbon-macros)

A handy collection of international `Illuminate\Support\Carbon` date helpers

## Available Methods

### Multi-National Dates
- isNewYearsDay
- isGoodFriday
- isEasterSunday
- isAllSaintsDay
- isChristmasDay
- isNewYearsEve

### US Dates 🇺🇸

- isMlkJrDay
- isPresidentsDay
- isMemorialDay
- isIndependenceDay
- isLaborDay
- isColumbusDay
- isVeteransDay
- isAmericanThanksgiving

### Canadian Dates 🇨🇦
- isFamilyDay
- isVictoriaDay
- isCanadaDay
- isCivicHoliday
- isLabourDay
- isCanadianThanksgiving
- isRemembranceDay
- isBoxingDay

### Other Dates

- [Algeria](./docs/algeria.md) 🇩🇿
- [Brazil](./docs/brazil.md) 🇧🇷
- [Egypt](./docs/egypt.md) 🇪🇬
- [France](docs/france.md) 🇫🇷
- [Germany](./docs/germany.md) 🇩🇪
- [India](./docs/india.md) 🇮🇳
- [Indonesia](./docs/indonesia.md) 🇮🇩
- [Italy](./docs/italy.md) 🇮🇹
- [Kenya](./docs/kenya.md) 🇰🇪
- [Netherlands](./docs/netherlands.md) 🇳🇱
- [Poland](./docs/poland.md) 🇵🇱
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

$day->isCanadaDay();
// false

$day->isNewYearsDay();
// false
```

![](./lcm-autocomplete.gif)
