<?php
namespace Bigbank\Omniva\Services;

/**
 *
 */
interface AddressSearchInterface
{

    /**
     * @param $partialAddress
     *
     * @return mixed
     */
    public function findAddresses($partialAddress);
}
