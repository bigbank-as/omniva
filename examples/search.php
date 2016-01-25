<?php

use \Bigbank\Omniva\Omniva;
use Bigbank\Omniva\Services\AddressSearchInterface;

include './vendor/autoload.php';

$omnivaService = new Omniva(
    "https://otseturundus.post.ee/aadressid/ws/singleAddress2_5_1.wsdl",
    getenv('OMNIVA_PASSWORD')
);

/** @var AddressSearchInterface $addressSearchService */
$addressSearchService = $omnivaService->getService(AddressSearchInterface::class);

$results = $addressSearchService->findAddresses('Tartu mnt 18');

var_dump($results);
