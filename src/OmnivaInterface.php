<?php

namespace Bigbank\Omniva;

use League\Container\ContainerInterface;

/**
 * Bootstrap the DI container, return Omniva service classes
 */
interface OmnivaInterface
{

    /**
     * Ask for a service class from the DI container by it's ID (interface)
     *
     * @param string $service Service ID (interface class FQN)
     *
     * @return mixed
     */
    public function getService($service);

    /**
     * Get the DI container instance
     *
     * @return ContainerInterface
     */
    public function getContainer();
}
