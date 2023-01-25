# Mondial Relay Web Services PHP SDK

> This library aims to facilitate the usage of Mondial Relay Web Services

## Services

- [Delivery Choice](https://api.mondialrelay.com/Web_Services.asmx?op=WSI4_PointRelais_Recherche)

## Installation

### Requirements

- PHP 7.4
- Soap Extension

## Usage

[MondialRelay Documentation](https://www.mondialrelay.fr/media/108937/Solution-Web-Service-V5.6.pdf)

#### Find pickup points

```php
use MondialRelayWebServiceWrapper\MondialRelay\DeliveryChoice;

$delivery = new DeliveryChoice(
    [
        'site_id' => MONDIAL_RELAY_SITE_ID,
        'site_key' => MONDIAL_RELAY_SITE_KEY,
    ]
);

$result = $delivery->findPickupPoints('FR', '75001', 'FR');

print_r($result);
```

#### Find pickup points by code

```php
use MondialRelayWebServiceWrapper\MondialRelay\DeliveryChoice;

$delivery = new DeliveryChoice(
    [
        'site_id' => MONDIAL_RELAY_SITE_ID,
        'site_key' => MONDIAL_RELAY_SITE_KEY,
    ]
);

$result = $delivery->findPickupPointByCode('FR', '062049');

print_r($result);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
