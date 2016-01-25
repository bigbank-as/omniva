<?php
namespace Bigbank\Omniva;

use League\Container\Container;
use League\Container\ContainerInterface;

/**
 *
 */
class Omniva
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @param string $apiUrl
     * @param string $apiPassword
     * @param array  $options
     */
    public function __construct($apiUrl, $apiPassword, array $options = [])
    {

        $this->container = $this->containerFactory($apiUrl, $apiPassword, $options);
    }

    /**
     * @param string $apiUrl
     * @param string $apiPassword
     * @param array  $options
     *
     * @return Container
     */
    private function containerFactory($apiUrl, $apiPassword, array $options = [])
    {

        $container = new Container;

        $systemServiceProvider = new ServiceProvider;
        $systemServiceProvider->setApiUrl($apiUrl)
            ->setApiPassword($apiPassword)
            ->setOptions($options);

        $container->addServiceProvider($systemServiceProvider);

        return $container;
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
