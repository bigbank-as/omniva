<?php
namespace Bigbank\Omniva\Services;

/**
 * Search for a physical address from Omniva's database
 *
 * Given a partial address input, return an array of possible full-length addresses.
 */
interface AddressSearchInterface
{

    /**
     * Search for possible full-length addresses from a partial input
     *
     * @param string $partialAddress
     *
     * @return string[] Possible addresses as an array of arrays. Each entry has a list of address components.
     */
    public function findAddresses($partialAddress);

    /**
     * Set Omniva API authentication key
     *
     * @param string $key
     *
     * @return $this
     */
    public function setApiKey($key);
}
