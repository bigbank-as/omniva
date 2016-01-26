# PHP Library for Omniva Services

This is a PHP library for interfacing with [Omniva][link-omniva] (former Estonian Postal Service) web API-s.

## Install

Via Composer

``` bash
$ composer require bigbank/omniva
```

The library requires PHP `>=5.6` and `curl`, `soap` and `openssl` extensions.

## Usage

``` php
// Instantiate the main class
$omniva = new Omniva;

// Ask for a service. Note that an API key needs to be set.
$addressSearchService = $omniva->getService(AddressSearchInterface::class)
    ->setApiKey(getenv('OMNIVA_PASSWORD'));

// Get a list of all matching addresses for a partial input
$addresses = $addressSearchService->findAddresses('Tartu mnt 18');

print_r($addresses);
```

## Services

The library provides access to the following services:

### AddressSearch (`AddressSearchInterface`)

Get a list of physical addresses based on a partial input. Useful for applications like address auto-complete.

#### Usage

```php
$addressSearchService = $omniva->getService(AddressSearchInterface::class)
    ->setApiKey(getenv('OMNIVA_PASSWORD'))
    ->findAddresses('Tartu mnt 18');
```
#### Sample Output

```
Array
(
    [0] => Array
        (
            [address] => Eesti Vabariik, Tartu maakond, Elva linn, Tartu maantee 18
            [addressNumber] => 18
            [county] => Tartu maakond
            [countyId] => 0078
            [designation] => 
            [flatNumber] => 
            [latitude] => 641443.84
            [level] => A7
            [longitude] => 6457217.29
            [mailboxType] => 
            [mainAddress] => 
            [municipality] => Elva linn
            [municipalityId] => 0170
            [municipalityType] => linn
            [nationalAddressId] => 7817000000000002H000019HC00000000
            [omnivaAddressId] => 3702034
            [postalIndex] => 61505
            [postOfficeBoxNumber] => 
            [settlement] => 
            [settlementId] => 0000
            [settlementType] => 
            [status] => Kontrollitud, kehtiv
            [territorialAddress] => 
            [territorialAddressType] => 
            [trafficSurface] => Tartu maantee
            [trafficSurfaceType] => tee
        )
)
```
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

### Definitions

Definitions for terms used by Omniva API-s (in Estonian):

- **EHAK** - Eesti haldus- ja asustusjaotuse klassifikaator
- **ADS** - Aadressiandmete süsteem
- **Põhiaadress** - See on vajalik juhul kui objektil on küll mitu aadressi kuid aktiivselt kasutatakse ühte nendest ja teine on varuks. Näiteks kui on tegu tänava nurgal oleva majaga, millel on kaks aadressi. Hoone peasissekäik on ühelt tänavalt ja see aadress oleks sel juhul põhiaadress.

### Related Materials

These materials (in Estonian) help to understand the address domain.

- [Kohanimed Aadressiandmete Süsteemis, Maa-Amet 2008](http://geoportaal.maaamet.ee/docs/aadress/Koh_pv.ppt)
- [L-EST97 Eesti Geodeetiline süsteem](https://www.ria.ee/public/Avaliku_teabe_s._seminar_23.1.2008/Kokkuv_te_Geodeetiline_s_steem.pdf)
- [ADS kontseptsioon](https://www.maaamet.ee/docs/ADS/ADSkontsep2007.doc)

## Security

If you discover any security related issues, please email info@bigbank.ee instead of using the issue tracker.

## Credits

- [Bigbank's developers][link-bb-developers]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-bb-developers]: https://github.com/orgs/bigbank-as/people
[link-contributors]: ../../contributors
[link-omniva]: https://www.omniva.ee
