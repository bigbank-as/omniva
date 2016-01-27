<?php
/**
 * Example on using Omniva's address search service
 *
 * Given a partial address input, return an array of possible full-length addresses.
 */
use Bigbank\Omniva\Omniva;
use Bigbank\Omniva\Services\AddressSearchInterface;

include './vendor/autoload.php';

echo "Trying to search addresses from Omniva. Make sure you have set the OMNIVA_PASSWORD environment variable.\n";

// Instantiate the main class
$omniva = new Omniva;

// Ask for the address search service. Note that an API key needs to be set.
/** @var AddressSearchInterface $addressSearchService */
$addressSearchService = $omniva->getService(AddressSearchInterface::class)
    ->setApiKey(getenv('OMNIVA_PASSWORD'));

// Get a list of all matching addresses for a partial input
$addresses = $addressSearchService->findAddresses('Tartu mnt 18');

print_r($addresses);
