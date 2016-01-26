<?php
namespace Bigbank\Omniva;

use League\Container\Container;
use League\Container\ContainerInterface;

/**
 * {@inheritdoc}
 */
class Omniva implements OmnivaInterface
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Setup dependency injection
     */
    public function __construct()
    {

        $this->container = $this->containerFactory();
    }

    /**
     * @return Container
     */
    private function containerFactory()
    {

        $container = new Container;
        return $container->addServiceProvider(new ServiceProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getService($service)
    {

        return $this->container->get($service);
    }

    /**
     * {@inheritdoc}
     */
    public function getContainer()
    {

        return $this->container;
    }
}
