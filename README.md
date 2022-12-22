# Nova Place Field

[![Latest Version](http://img.shields.io/packagist/v/yuriy-martini/nova-place-field.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/yuriy-martini/nova-place-field)
[![MIT License](https://img.shields.io/github/license/yuriy-martini/nova-place-field.svg?label=License&color=blue&style=for-the-badge)](https://github.com/yuriy-martini/nova-place-field/blob/master/LICENSE.md)

## Installation

```shell
composer require yuriy-martini/nova-place-field
```

## Configuration

Add to `.env` file `GOOGLE_MAPS_PLACES_API_KEY` or `GOOGLE_MAPS_API_KEY`.

```dotenv
GOOGLE_MAPS_API_KEY=
GOOGLE_MAPS_PLACES_API_KEY=${GOOGLE_MAPS_API_KEY}
```

## Usage

```php
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Text;
use YuriyMartini\NovaPlaceField\Place;

public function fields(Request $request)
{
    return [
        Place::make('Address')
            ->locality('city')
            ->administrativeAreaLevel1('state')
            ->country('country', true),
        
        Text::make('Street Number'),
        
        Text::make('City'),
        
        Text::make('State'),
        
        Text::make('Postal Code'),
        
        Country::make('Country'),
    ];
}
```

## Changelog

Please see [Changelog File](CHANGELOG.md) for more information on what has changed recently.

## Testing

```shell
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
